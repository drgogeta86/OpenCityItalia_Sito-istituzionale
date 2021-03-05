<?php
require 'autoload.php';

use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;
use Google\Spreadsheet\SpreadsheetService;
use Opencontent\I18n\GoogleSheetCsvParser;
use Opencontent\Installer\Dumper\Tool;
use Symfony\Component\Yaml\Yaml;

$cli = eZCLI::instance();
$output = new ezcConsoleOutput();
$script = eZScript::instance(array('description' => (""),
    'use-session' => false,
    'use-modules' => true,
    'use-extensions' => true));

$script->startup();

$options = $script->getOptions();
$script->initialize();
$script->setUseDebugAccumulators(true);

$dryRun = true;

function debug($message)
{
    $color = eZCLI::instance()->terminalStyle('cyan');
    $colorEnd = eZCLI::instance()->terminalStyle('cyan-end');
    $normal = eZCLI::instance()->terminalStyle('normal');
    eZCLI::instance()->output($color . $message . $colorEnd . $normal);
}

if ($dryRun){
    debug('DRY RUN');
}

$installerDir = realpath('../conf.d/installer/modules/topics-tree/');
$oldInstallerDir = realpath('../conf.d/installer/contenttrees/Argomenti/');
if (!is_dir($installerDir)) {
    $installerDir = realpath('../installer/modules/topics-tree/');
    $oldInstallerDir = realpath('../installer/contenttrees/Argomenti/');
}
$cli->output("Installer path ", false);
$cli->warning($installerDir);

$cli->output("Get data from spreadsheet ", false);
$googleSpreadsheetUrl = 'https://docs.google.com/spreadsheets/d/1cOBaRlibj5A8E2pshQ1xDRfD7pd1pwAw7QInxrbTK9Y';
$googleSpreadsheetTemp = explode('/', str_replace('https://docs.google.com/spreadsheets/d/', '', $googleSpreadsheetUrl));
$googleSpreadsheetId = array_shift($googleSpreadsheetTemp);
$serviceRequest = new DefaultServiceRequest("");
ServiceRequestFactory::setInstance($serviceRequest);
$spreadsheetService = new SpreadsheetService();

$worksheetFeed = $spreadsheetService->getPublicSpreadsheet($googleSpreadsheetId);
$feedTitle = (string)$worksheetFeed->getXml()->title;
$entries = $worksheetFeed->getEntries();
$sheets = array();
foreach ($entries as $entry) {
    $sheets[] = $entry->getTitle();
}
//$choice = 0;
//if (count($sheets) > 1) {
//    $menu = new ezcConsoleMenuDialog($output);
//    $menu->options = new ezcConsoleMenuDialogOptions();
//    $menu->options->text = "Please choose a possibility:\n";
//    $menu->options->validator = new ezcConsoleMenuDialogDefaultValidator($sheets);
//    $choice = ezcConsoleDialogViewer::displayDialog($menu);
//}
$choice = 2;
$worksheet = $worksheetFeed->getByTitle($sheets[$choice]);
$cli->warning('ok');
$csv = GoogleSheetCsvParser::parse($worksheet, true, true);
$cli->output();
$cli->output();

$oldTopicRemoteIdNameList = [];
$oldTopicDefinitions = eZDir::findSubitems($oldInstallerDir, 'f');
foreach ($oldTopicDefinitions as $oldTopicDefinitionFile) {
    $yamlFile = $oldInstallerDir . '/' . $oldTopicDefinitionFile;
    $oldTopicDefinition = Yaml::parse(file_get_contents($yamlFile));
    $oldTopicRemoteIdNameList[$oldTopicDefinition['metadata']['remoteId']] = $oldTopicDefinition['data']['ita-IT']['name'];
}


function generateRemoteId($name, $level)
{
    $slug = eZCharTransform::instance()->transformByGroup($name, 'identifier');
    return "topic_{$level}_{$slug}";
}

function createContent($name, $directory, $row, $level, $remoteId)
{
    global $dryRun, $cli;

    static $avoidDuplicates = [];

    $slug = eZCharTransform::instance()->transformByGroup($name, 'identifier');
    $alreadyExists = $remoteId !== generateRemoteId($name, $level);

    $filename = $slug . '.yml';

    if (!file_exists($directory . '/' . $filename)) {
        debug("Create file $filename in $directory");
        $name = str_replace('À', 'à', $name);
        $contentName = ucfirst(strtolower(trim($name)));
        $content = [
            'metadata' => [
                'remoteId' => $remoteId,
                'classIdentifier' => 'topic',
                'sectionIdentifier' => 'standard',
                'languages' => ['ita-IT'],
            ],
            'data' => [
                'ita-IT' => [
                    'name' => $contentName,
                    'eu' => empty($row['Link']) ? '(in definizione)' : $row['Link'],
                ],
            ],
            'sort_data' => [
                'sort_field' => 9,
                'sort_order' => 1,
                'priority' => 0
            ],
        ];
        if (!$alreadyExists) {
            $content['data']['ita-IT']['abstract'] = !empty($row['Abstract']) ? '<p>' . $row['Abstract'] . '</p>' : '';
        }
        $data = Yaml::dump($content, 10);
        eZFile::create($filename, $directory, $data);
    }

    return $remoteId;
}

function createDir($list, $parent)
{
    global $installerDir, $dryRun, $cli;

    static $avoidDuplicates = [];

    static $parents = [];

    $prefix = 'content';
    if ($parent !== 'Argomenti') {
        $parent = eZCharTransform::instance()->transformByGroup($parent, 'identifier');
        $prefix = 'contenttree';
    }

    $name = [];
    foreach ($list as $item) {
        $name[] = eZCharTransform::instance()->transformByGroup($item, 'identifier');
    }

    $name = implode('_', $name);
    $directory = $installerDir . '/contenttrees/' . $name;

    if (!is_dir($directory) && !$dryRun) {
        debug("Create directory $name");
        eZDir::mkdir($directory, false, true);

        Tool::appendToInstallerSteps($installerDir, [
            'type' => 'contenttree',
            'identifier' => $name,
            'parent' => '$' . $prefix . '_' . $parent . '_node',
            'update' => '$do_update',
            'remove_locations' => '$do_remove_locations',
        ], true);
    }

    return $directory;
}

$oldTouched = [];
$map = [];
$avoidDuplicated = [];
$newTopicRemoteIdNameList = [];

foreach ($csv as $row) {
    $label1 = $row['I LIV'];
    $label2 = $row['II LIV'];
    $label3 = $row['III LIV'];

    $topic = false;
    $directory = false;
    $level = false;
    $name = false;

    if (!empty($label1)) {
        $name = $label1;
        $level = 1;
        $topic = generateRemoteId($name, $level);
        $directory = createDir(['topics'], 'Argomenti');
    }
    if (!empty($label2)) {
        $name = $label2;
        $level = 2;
        $topic = generateRemoteId($name, $level);
        $directory = createDir([$label1], 'topics_' . $label1);
    }
    if (!empty($label3)) {
        $name = $label3;
        $level = 3;
        $topic = generateRemoteId($label3, $level);
        $directory = createDir([$label1, $label2], $label1 . '_' . $label2);
    }

    if ($topic) {
        $space = str_pad('', 1 * ($level - 1), "\t");
        $cli->output($space . $name, false);
        $remapped = false;
        $oldTopics = $row['Mappatura vecchio topic'];
        if (!empty($oldTopics)) {
            $remoteIdList = [];
            $oldTopics = explode(',', trim($oldTopics));
            foreach ($oldTopics as $oldTopic) {
                $yamlFile = $oldInstallerDir . '/' . trim($oldTopic) . '.yml';
                if (!file_exists($yamlFile)) {
                    $cli->error($yamlFile . ' non trovato');
                } else {
                    $oldTopicDefinition = Yaml::parse(file_get_contents($yamlFile));
                }
                $remoteIdList[] = $oldTopicDefinition['metadata']['remoteId'];
            }

            $oldTouched = array_merge($oldTouched, $remoteIdList);

            if (!empty($remoteIdList)) {
                $topic = array_shift($remoteIdList);
                array_unshift($remoteIdList, $topic);
                $remapped = true;
                if (!isset($map[$topic])) {
                    $map[$topic] = $remoteIdList;
                } else {
                    $map[$topic] = array_merge($map[$topic], $remoteIdList);
                }
                $map[$topic] = array_unique($remoteIdList);
            }
        }
        if ($remapped) {
            $cli->error(' rinomina il vecchio argomento ' . $oldTopicRemoteIdNameList[$topic] . " (#$topic)");
        } else {
            $cli->warning(" viene creato ex-novo (#$topic)");
        }

        if (isset($avoidDuplicated[$topic])) {
            throw new Exception("Topic $topic duplicated!");
        } else {
            $avoidDuplicated[$topic] = true;
        }

        $newTopicRemoteIdNameList[$topic] = $name;
        if (!$dryRun) {
            createContent($name, $directory, $row, $level, $topic);
        }
    }
}

$cli->output();
foreach ($map as $topic => $remoteIdList) {
    $topicName = isset($newTopicRemoteIdNameList[$topic]) ? $newTopicRemoteIdNameList[$topic] : $oldTopicRemoteIdNameList[$topic];
    foreach ($remoteIdList as $remoteId) {
        $targetName = isset($oldTopicRemoteIdNameList[$remoteId]) ? $oldTopicRemoteIdNameList[$remoteId] : $newTopicRemoteIdNameList[$remoteId];
        if (!isset($newTopicRemoteIdNameList[$remoteId])) {
            $cli->output("$targetName viene deprecato e i contenuti vengono rimappati in $topicName");
            if (!$dryRun) {
                Tool::appendToInstallerSteps($installerDir, [
                    'type' => 'deprecate_topic',
                    'identifier' => $remoteId,
                    'target' => $topic,
                    'move_in' => '$content_Argomenti-deprecati_node'
                ], true);
            }

        } else {
            $cli->output("I contenuti di $targetName vengono reindicizzati nell'alberatura di " . $newTopicRemoteIdNameList[$remoteId]);
            if (!$dryRun) {
                Tool::appendToInstallerSteps($installerDir, [
                    'type' => 'deprecate_topic',
                    'identifier' => $remoteId,
                    'target' => $topic
                ], true);
            }
        }
    }
}
$oldUntouched = array_diff(array_keys($oldTopicRemoteIdNameList), array_unique($oldTouched));
foreach ($oldUntouched as $remoteId) {
    $targetName = isset($oldTopicRemoteIdNameList[$remoteId]) ? $oldTopicRemoteIdNameList[$remoteId] : $newTopicRemoteIdNameList[$remoteId];
    $cli->output("$targetName viene deprecato");
    if (!$dryRun) {
        Tool::appendToInstallerSteps($installerDir, [
            'type' => 'deprecate_topic',
            'identifier' => $remoteId,
            'move_in' => '$content_Argomenti-deprecati_node'
        ], true);
    }
}
$cli->output();

$script->shutdown();