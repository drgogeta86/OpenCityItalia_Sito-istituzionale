<?php /* #?ini charset="utf-8"?
#?ini charset="utf-8"?
# eZ Publish configuration file for debug
#
# NOTE: It is not recommended to edit this files directly, instead
#       a file in override should be created for setting the
#       values that is required for your site. Either create
#       a file called settings/override/debug.ini.append or
#       settings/override/debug.ini.append.php for more security
#       in non-virtualhost modes (the .php file may already be present
#       and can be used for this purpose).

[DebugSettings]
# Master switch for conditional debugging, if disabled
# no conditions are checked.
ConditionDebug=enabled

[GeneralCondition]
# Enabled/disabled specific conditions
# Default is to have everything off and to turn it on
# in override files.
workflow-event=disabled
workflow-process=disabled
workflow-type=disabled


kernel-workflow-approve=disabled

kernel-content-view=disabled
kernel-content-view-cache=disabled
kernel-content-class=disabled
kernel-content-treenode=disabled
kernel-content-object-copy=disabled
kernel-content-object-related-objects=disabled
kernel-content-object-limitation=disabled
kernel-content-edit=disabled
kernel-content-publish=disabled

kernel-persistent-object-cache=disabled

kernel-urltranslator=disabled

kernel-search-ezsearch=disabled
kernel-search-openfts=disabled

kernel-policy-limitation=disabled
kernel-role-edit=disabled

kernel-siteaccess=disabled

kernel-db-postgresql=disabled

kernel-user=disabled

kernel-notification=disabled
kernel-ssl-zone=disabled
kernel-clustering=disabled

kernel-ezpackage-store=disabled


module-run=disabled


collaboration-group-tree=disabled
collaboration-item-list=disabled


eztemplate-tree-cache=disabled
eztemplate-compile=disabled


i18n-tstranslator=disabled


ezfile-create=disabled
lib-ezfile-seek=disabled
lib-ezfile-openclose=disabled
lib-ezfile-readwrite=disabled
lib-ezfile-copy=disabled
lib-ezfile-gziplibz=disabled

lib-ezimage-shell=disabled

lib-dbschema-transformation=disabled

lib-ezutil-web=disabled
lib-ezutils-dir=disabled

ezuserformtoken=disabled
*/ ?>
