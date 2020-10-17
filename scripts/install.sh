#!/usr/bin/env bash

set -e

if [[ -z $EZ_ROOT ]]; then
    echo "[error] EZ_ROOT is empty this variable is required in this container, please set it to the public dir of Ez and restart"
    exit 1
else
    echo "[info] Current root is ${EZ_ROOT}"
fi

EZ_USER='www-data'
EZ_USER_GROUP='www-data'
EZ_CHMOD_VAR=${EZ_CHMOD_VAR:-'2775'}
EZ_CHMOD_LOG=${EZ_CHMOD_LOG:-'660'}
EZ_CLUSTER_GET_OWNERSHIP=${EZ_CLUSTER_GET_OWNERSHIP:-'true'}

if [ ! -d ${EZ_ROOT}/var/cache/ini ]; then
    mkdir -p ${EZ_ROOT}/var/cache/ini
    echo "[info] created var/cache/ini"
fi

if [ ! -d ${EZ_ROOT}/var/cache/texttoimage ]; then
    mkdir -p ${EZ_ROOT}/var/cache/texttoimage
    echo "[info] created var/cache/texttoimage"
fi

if [ ! -d ${EZ_ROOT}/var/cache/codepages ]; then
    mkdir -p ${EZ_ROOT}/var/cache/codepages
    echo "[info] created var/cache/codepages"
fi

if [ ! -d ${EZ_ROOT}/var/cache/translation ]; then
    mkdir -p ${EZ_ROOT}/var/cache/translation
    echo "[info] created var/cache/translation"
fi

if [ ! -d ${EZ_ROOT}/var/log ]; then
    mkdir -p ${EZ_ROOT}/var/log
    echo "[info] created dir var/log"
fi

for logfile in cluster_error debug error ocfoshttpcache storage warning mugo_varnish_purges strict notice; do
  if [[ ! -f ${EZ_ROOT}/var/log/${logfile}.log ]]; then
    touch ${EZ_ROOT}/var/log/${logfile}.log && \
    chown www-data ${EZ_ROOT}/var/log/${logfile}.log
  fi
  tail -F --pid $$ ${EZ_ROOT}/var/log/${logfile}.log &
done


#Permesso di scrittura per '$EZ_USER_GROUP' per la directory var/
echo "[info] chown $EZ_USER.$EZ_USER_GROUP ${EZ_ROOT}/var"
      chown $EZ_USER.$EZ_USER_GROUP ${EZ_ROOT}/var
      chown $EZ_USER.$EZ_USER_GROUP ${EZ_ROOT}/var/*
      chown $EZ_USER.$EZ_USER_GROUP ${EZ_ROOT}/var/cache/*
echo "[info] chmod ${EZ_CHMOD_VAR} ${EZ_ROOT}/var"
      chmod ${EZ_CHMOD_VAR} ${EZ_ROOT}/var
      chmod ${EZ_CHMOD_VAR} ${EZ_ROOT}/var/*
      chmod ${EZ_CHMOD_VAR} ${EZ_ROOT}/var/cache/*

# aumenta la sicurezza dando 660 ai file di log
echo "[info] chmod ${EZ_CHMOD_LOG} ${EZ_ROOT}/var/log/*"
     chmod ${EZ_CHMOD_LOG} ${EZ_ROOT}/var/log/*

echo "[info] chown -R -L $EZ_USER.$EZ_USER_GROUP /var/www/installer"
      chown -R $EZ_USER.$EZ_USER_GROUP /var/www/installer

if [[ -n $EZINI_file__eZDFSClusteringSettings__MountPointPath ]]; then
    if [[ -d $EZINI_file__eZDFSClusteringSettings__MountPointPath ]]; then
        echo "[info] fixing perms in '${EZINI_file__eZDFSClusteringSettings__MountPointPath}' ..."
        chown $EZ_USER $EZINI_file__eZDFSClusteringSettings__MountPointPath
    else
        mkdir -p $EZINI_file__eZDFSClusteringSettings__MountPointPath
        chown $EZ_USER $EZINI_file__eZDFSClusteringSettings__MountPointPath
    fi
fi

RUN_INSTALLER=${RUN_INSTALLER:-'true'}
RUN_INSTALLER_TRASPARENZA=${RUN_INSTALLER_TRASPARENZA:-'false'}
RUN_INSTALLER_NEWSLETTER=${RUN_INSTALLER_NEWSLETTER:-'false'}
RUN_INSTALLER_DEMO=${RUN_INSTALLER_DEMO:-'false'}
RUN_REINDEX_CONTENT=${RUN_REINDEX_CONTENT:-'false'}
if [[ -n $EZ_INSTANCE ]]; then
    if [[ -f vendor/bin/ocinstall ]]; then
        if [[ $RUN_INSTALLER == 'true' ]]; then
            echo "[info] run installer on ${EZ_INSTANCE}"
            sudo -E -u $EZ_USER php vendor/bin/ocinstall --allow-root-user -sbackend --embed-dfs-schema --no-interaction --languages=ita-IT,ita-PA ../installer/
        else
            echo "[info] RUN_INSTALLER is set to false"
        fi
        if [[ $RUN_INSTALLER_TRASPARENZA == 'true' ]]; then
            echo "[info] run installer trasparenza on ${EZ_INSTANCE}"
            sudo -E -u $EZ_USER php vendor/bin/ocinstall --allow-root-user -sbackend --no-interaction ../installer/modules/trasparenza
        else
            echo "[info] RUN_INSTALLER_TRASPARENZA is set to false"
        fi
        if [[ $RUN_INSTALLER_NEWSLETTER == 'true' ]]; then
            echo "[info] run installer trasparenza on ${EZ_INSTANCE}"
            sudo -E -u $EZ_USER php vendor/bin/ocinstall --allow-root-user -sbackend --no-interaction ../installer/modules/newsletter
        else
            echo "[info] RUN_INSTALLER_NEWSLETTER is set to false"
        fi
        if [[ $RUN_INSTALLER_DEMO == 'true' ]]; then
            echo "[info] run installer demo on ${EZ_INSTANCE}"
            sudo -E -u $EZ_USER php vendor/bin/ocinstall --allow-root-user -sbackend --no-interaction ../installer/modules/demo
        else
            echo "[info] RUN_INSTALLER_DEMO is set to false"
        fi
    else
        echo "[warning] Installer bin vendor/bin/ocinstall not found"
    fi

    if [[ $RUN_REINDEX_CONTENT == 'true' ]]; then
        echo "[info] run reindex content on ${EZ_INSTANCE}"
        sudo -E -u $EZ_USER php bin/php/updatesearchindex.php -sbackend --clean --allow-root-user
    else
        echo "[info] RUN_REINDEX_CONTENT is set to false"
    fi
else
    echo "[warning] EZ_INSTANCE not found"
fi


sudo -E -u $EZ_USER php bin/php/ezcache.php --clear-all

exec "$@"
