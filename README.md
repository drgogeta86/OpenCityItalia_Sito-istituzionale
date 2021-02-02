# OpenCity 

[![pipeline status](https://gitlab.com/opencontent/opencity/badges/master/pipeline.svg)](https://gitlab.com/opencontent/opencity/commits/master)
[![license](https://img.shields.io/badge/license-GPL-blue.svg)](https://gitlab.com/opencontent/opencity/blob/master/LICENSE)
[![issues](https://img.shields.io/badge/Issues-open-red?logo=gitlab)](https://gitlab.com/opencontent/opencity/-/issues)
[![docker](https://img.shields.io/badge/docker-ready-blue?logo=docker)](https://gitlab.com/opencontent/opencity/container_registry)
[![developersitalia](https://img.shields.io/badge/developers-italia-blue)](https://developers.italia.it/it/software/c_a116-comune-di-ala-comunweb)
[![developersitalia](https://img.shields.io/badge/forum-italia-blue)](https://forum.italia.it/c/software-open-source-per-la-pa/49)

Sito Istituzionale di un Comune Italiano, conforme alle linee guida di [Design Italia](https://designers.italia.it/progetti/siti-web-comuni/).

## Descrizione

![Homepage di OpenCity](https://www.awesomescreenshot.com/upload//1012030/8b055be2-2d94-4d86-79ae-c6b56f3dd228.png)

E' un modello di portale web avanzato, adatto a promuovere i contenuti di un ente pubblico in modalità multi-canale (pc, tablet,
smartphone, totem). Conforme alle Linee Guida di design per i servizi web della PA e sviluppato utilizzando i KIT di Designers
Italia, il sistema guida i redattori a creare e pubblicare contenuti strutturati, che vengono inseriti una sola volta nel sistema e
possono essere rappresentati automaticamente in gallerie fotografiche, calendari, mappe, grafici interattivi, aree riservate. In base
ai permessi, il contenuto diventa disponibile agli utenti anche attraverso un motore di ricerca unico, dotato di filtri progressivi e di
suggerimenti automatici. Strumento ideale per le redazioni distribuite: ciascun redattore detiene permessi e ruoli in base alla
competenza.

## Altri riferimenti

Per maggiori informazioni è possibile consultare: 

 * [Demo](https://opencity.openpa.opencontent.io)
 * [Manuale utente](https://manuale-opencity-bootstrap-italia.readthedocs.io/)

## API 

 * [API della Demo](https://opencity.openpa.opencontent.io/api/opendata/)
 * [Documentazione API](https://documenter.getpostman.com/view/7046499/S17tPncG)


## Project Status

Il prodotto è *stabile* e *production ready* e usato in produzione in diverse città Italiane. Lo sviluppo avviene in modo costante, sia su richiesta degli Enti utilizzatori, sia su iniziativa autonoma del _maintainer_.

### Come provare Opencity

Per avere un ambiente completo di demo e' necessario avere Docker installato
sul proprio desktop. Una volta che docker è disponibile scaricare il file [docker-compose.yml](https://gitlab.com/opencontent/opencity/-/raw/master/docker-compose.yml?inline=false) e posizionarsi nella directory dove si è scaricato il 
file. A questo punto è sufficiente dare il comando:

```
docker-compose up -d
```

Il prototipo di OpenCity sarà disponibile ai seguenti indirizzi:

* [opencity.localtest.me](https://opencity.localtest.me)

E' possibile fare accesso come amministratore usando l'account:
* utente:  `admin`
* password: `change_password`

Il certificato usato per tutti i domini è un certificato autofirmato valido sul
dominio `*.localtest.me`, quindi al primo collegamento si ottiene un warning
con quasi tutti i moderni browser.

### Come creare un ambiente di sviluppo locale

Per avere un ambiente completo di sviluppo clonare
il repository e dalla directory principale e dare i comandi:

```
mv docker-compose.dev.yml docker-compose.override.yml
docker-compose up -d
```

Il prototipo di OpenCity sarà disponibile ai seguenti indirizzi:

* [opencity.localtest.me](https://opencity.localtest.me)
* [opencity.localtest.me/backend](https://opencity.localtest.me/backend), per l'area riservata agli amministratori (l'utente di default con cui si accede è `admin/change_password`)
* [solr.localtest.me/solr](https://solr.localtest.me/solr), per l'interfaccia amministrativa del motore di ricerca SOLR
* [traefik.localtest.me:8080](https://traefik.localtest.me:8080) per l'interfaccia amministrativa di Traefik
* [mailhog.opencity.localtest.me](https://mailhog.opencity.localtest.me/), le email inviate in questo ambiente sono visibili in questa interfaccia web
* [pgweb.opencity.localtest.me](https://pgweb.opencity.localtest.me/), interfaccia web per il database PostgreSQL
* [minio.opencity.localtest.me](https://minio.opencity.localtest.me/), interfaccia web per l'object storage

Il certificato usato per tutti i domini è un wildcard self-signed certificate sul dominio *.localtest.me, quindi al primo collegamento si ottiene un warning.

### Useful commands

Per vedere i log di tutti container:

    docker-compose logs -f --tail 20

o solo uno di essi (ad esempio php):

    docker-compose logs -f --tail 20 php

Per ottenere una shell all'interno del container PHP, eseguire:

    docker-compose exec php bash

Per accedere al database da CLI:

    docker-compose exec postgres bash
    bash-4.4# psql -v ON_ERROR_STOP=1 --username "$POSTGRES_USER" --dbname "$POSTGRES_DB"

Per reindicizzare tutti i contenuti su SOLR:

    docker-compose exec php bash -c 'cd html; php bin/php/updatesearchindex.php --allow-root-user'

### Rebuild database from scratch

Per ricreare il database dai dump del repository e tornare quindi al prototipo orginale è possibile eseguire

    docker-compose exec php bash -c 'cd html; php vendor/bin/ocinstall --allow-root-user -sbackend --cleanup --embed-dfs-schema --no-interaction --languages=ita-IT,ita-PA ../installer/'


## Informazioni tecniche

L'applicazione è sviluppata sul CMS Ez Publish e consta di codice PHP, 
il dump del database contenente una installazione pienamente funzionante
dell'applicativo e i file di configurazione necessari per il motore di 
ricerca.

### Struttura del Repository

Il repository contiene i seguenti file:
```
composer.json
composer.lock
```
Il repository non contiene direttamente il codice applicativo, contiene 
invece il file delle dipendenze PHP (`composer.json`) che elenca tutti i componenti 
necessari all'applicazione: il CMS Ez Publish, le estensioni dello stesso 
utilizzate e tra queste l'estensione opencity che implementa le funzionalità 
più rilevanti. Con un comando `composer install` dalla stessa directory è possibile ottenere il codice dell'applicativo pronto all'uso (si veda anche [Dockerfile, L3](https://gitlab.com/opencontent/opencity/blob/master/Dockerfile#L3))


Il file `Dockerfile` e le directory
```
/scripts
/conf.d
```
contengono file di supporto per la creazione dell'immagine Docker dell'applicativo.

Il file
```
docker-compose.yml
```
contiene i servizi minimi necessari per l'esecuzione di OpenCity e può essere usato per il deploy su un singolo host o su un cluster Docker Swarm o Kubernetes.

Il file
```
docker-compose.override.yml
```
viene usato automaticamente da docker-compose quando e' disponibile: quando si clona il repository ad esempio e si hanno tutti i file a disposizione, questo aggiunge alcuni servizi di supporto utili in ambiente di sviluppo, come una interfaccia web per il database.


### Requisiti

Lo stack minimo di OpenCity è il seguente:
  * database PostgreSQL 9.6
  * PHP 7.2
  * Solr 4.10.x per il motore di ricerca

Nel file `docker-compose.yml` vengono inoltre utilizzati:
  * Varnish per la cache dei contenuti
  * Traefik per il routing tra i diversi container
  * Minio per lo storage dei file

Le dipendenze del sistema operativo sono risolte nell'immagine da cui origina
l'immagine di OpenCity, ovvero [opencontentcoop/ezpublish](https://hub.docker.com/r/opencontentcoop/ezpublish). Per i dettagli su questa immagine si rimanda
al [repository](https://www.github.com/OpencontentCoop/docker-ezpublish) ad essa dedicata.

### Come si esegue la build del repository

Con il comando che segue:

    docker build -t opencity .

si esegue la build dell'immagine docker dell'applicazione: vengono installate le dipendenze
del sistema operativo e successivamente composer e le dipendenze applicative.

### Continuous Integration

Il software ha una pipeline di CI, che esegue una build ad ogni commit, disponibile alla seguente url:

https://gitlab.com/opencontent/opencity/pipelines

Le build delle immagini docker sono disponibili nel [Registry](https://gitlab.com/opencontent/opencity/container_registry) di GitLab.

## Copyright (C)

Il titolare del software è il [Comune di Ala](https://www.comune.ala.tn.it).

Il software è rilasciato con licenza aperta ai sensi dell'art. 69 comma 1 del [Codice dell’Amministrazione Digitale](https://cad.readthedocs.io/)

### Maintainer

[Opencontent SCARL](https://www.opencontent.it/), è responsabile della progettazione, realizzazione e manutenzione tecnica di OpenCity

