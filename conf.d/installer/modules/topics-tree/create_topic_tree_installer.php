<?php
require 'autoload.php';

use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;
use Google\Spreadsheet\SpreadsheetService;
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

$installerDir = realpath('../conf.d/installer/modules/topics-tree/');
$cli->output("Installer path ", false);
$cli->warning($installerDir);

$cli->output("Get data from spreadsheet ", false);
$googleSpreadsheetUrl = 'https://docs.google.com/spreadsheets/d/1yjmIsOQBclMDW2y2Z45ODVqrPCUn3om4kBMcxXoNDHQ';
$googleSpreadsheetTemp = explode('/',
    str_replace('https://docs.google.com/spreadsheets/d/', '', $googleSpreadsheetUrl));
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
$choice = 0;
if (count($sheets) > 1) {
    $menu = new ezcConsoleMenuDialog($output);
    $menu->options = new ezcConsoleMenuDialogOptions();
    $menu->options->text = "Please choose a possibility:\n";
    $menu->options->validator = new ezcConsoleMenuDialogDefaultValidator($sheets);
    $choice = ezcConsoleDialogViewer::displayDialog($menu);
}
$worksheet = $worksheetFeed->getByTitle($sheets[$choice]);
$csvData = $worksheet->getCsv();
$cli->warning('ok');

$cli->output("Parse date ", false);
$tempFile = "temp_topics.csv";
eZFile::create($tempFile, false, $csvData);
$csvFile = @fopen($tempFile, 'r');
$i = 0;
$headers = [];
$csv = [];
while ($data = fgetcsv($csvFile, 100000)) {
    if ($i == 0) // First line, handle headers
    {
        $headers = [];
        foreach ($data as $item) {
            $headers[] = trim($item);
        }
        $i++;
        unset($data);
        continue;
    }

    $rowData = array();
    for ($j = 0, $jMax = count($headers); $j < $jMax; ++$j) {
        $rowData[$headers[$j]] = $data[$j];
    }

    unset($data);
    $csv[] = $rowData;
    unset($rowData);
    $i++;
}
unlink($tempFile);


function createContent($name, $directory)
{
    global $installerDir, $cli;

    static $avoidDuplicates = [];

    $slug = eZCharTransform::instance()->transformByGroup($name, 'identifier');
    $filename = $slug . '.yml';

    if (!file_exists($directory . '/' . $filename)) {
        $cli->output("Create file $filename in $directory");

        $remoteIdMapper = [
            'residenza' => 'topic_1',
            'acqua' => 'topic_2',
            'educazione e formazione' => 'topic_3',
            'animale domestico' => 'topic_4',
            'previdenza e pensioni' => 'topic_5',
            'parcheggio' => 'topic_6',
            'associazionismo culturale' => 'topic_7',
            'vita istituzionale' => 'cf8eb21cf8b5c6743ae1caa2bc050c88',
            'comunicazione' => 'topic_9',
            'vita lavorativa' => 'topic_10',
            'cultura' => 'bd5192a42244b7e5a0dc4ac0830bce83',
            'edilizia pubblica' => 'topic_12',
            'energia' => 'topic_13',
            'politiche familiari' => '2eb5ffa8cfbb467dee3026fd6ab7464c',
            'scuola d\'infanzia' => 'topic_15',
            'formazione professionale' => 'topic_16',
            'gestione dei rifiuti' => 'topic_17',
            'politiche giovanili' => 'topic_18',
            'immigrazione' => 'topic_19',
            'attività produttive e commercio' => 'dfa6ed0f6ceeddbc718c6280e53b9385',
            'informazione ed elaborazione dell\'informazione' => 'topic_20',
            'inquinamento' => 'topic_21',
            'integrazione sociale' => 'topic_22',
            'istruzione' => 'topic_23',
            'matrimonio' => 'topic_24',
            'democrazia partecipativa' => 'fe63739f7047ad84533d1055c9380444',
            'comunicazione politica' => 'topic_26',
            'protezione sociale' => 'topic_27',
            'salute' => 'topic_28',
            'giustizia' => 'topic_29',
            'sicurezza pubblica' => 'topic_30',
            'spazio verde' => 'topic_31',
            'sport' => 'topic_32',
            'università' => 'topic_33',
            'tempo libero' => 'fc5ef422eef5373ea6019423b5ad55a0',
            'organizzazione dei trasporti' => 'topic_35',
            'politica dei trasporti' => 'topic_36',
            'strade' => 'topic_37',
            'turismo' => '158a858d0fe4b8a9d0fe5d50c3605cb2',
            'urbanistica ed edilizia' => 'topic_39'
        ];

        $remoteIdSeek = strtolower(trim($name));
        $remoteId = isset($remoteIdMapper[$remoteIdSeek]) ? $remoteIdMapper[$remoteIdSeek] : $slug;

        if (isset($avoidDuplicates[$remoteId])) {
            throw new Exception("Duplicate $remoteId {$avoidDuplicates[$remoteId]}");
        }

        $avoidDuplicates[$remoteId] = $directory . '/' . $slug;

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
                    'eu' => '(riferimento in via di definizione)',
                ],
            ],
            'sort_data' => [
                'sort_field' => 9,
                'sort_order' => 1,
                'priority' => 0
            ],
        ];
        $data = Yaml::dump($content, 10);
        eZFile::create($filename, $directory, $data);
    }
}

function createDir($list, $parent)
{
    global $installerDir, $cli;

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

    if (!is_dir($directory)) {
        $cli->output("Create directory $name");
        eZDir::mkdir($directory, false, true);

        \Opencontent\Installer\Dumper\Tool::appendToInstallerSteps($installerDir, [
            'type' => 'contenttree',
            'identifier' => $name,
            'parent' => '$' . $prefix . '_' . $parent . '_node',
            'update' => '$do_update',
            'remove_locations' => '$do_remove_locations',
        ], true);
    }

    return $directory;
}

foreach ($csv as $row) {
    $label1 = $row['Label 1 livello'];
    $label2 = $row['Label 2 livello'];
    $label3 = $row['Label 3 livello'];
    $label4 = $row['Label 4 livello'];

    if (!empty($label1)) {
        createContent($label1, createDir(['topics'], 'Argomenti'));
    }
    if (!empty($label2)) {
        $dir1 = createDir([$label1], 'topics_' . $label1);
        createContent($label2, $dir1);
    }
    if (!empty($label3)) {
        $dir2 = createDir([$label1, $label2], $label1 . '_' . $label2);
        createContent($label3, $dir2);
    }
    if (!empty($label4)) {
        $dir3 = createDir([$label1, $label2, $label3], $label1 . '_' . $label2 . '_' . $label3);
        createContent($label4, $dir3);
    }
}
$cli->warning('ok');

$script->shutdown();