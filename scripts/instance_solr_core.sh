#!/bin/bash

if [[ -n $EZ_INSTANCE ]]; then
    echo "[info] set ${EZ_INSTANCE} as ezp-default solr core name"
    sed -i "s/name=\"ezp-default\"/name=\"$EZ_INSTANCE\"/" /opt/ez/solr.xml
fi
