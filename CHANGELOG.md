# Changelog

All notable changes to this project will be documented in this file.

This project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).


## [2.1.13](https://gitlab.com/opencontent/opencity/compare/2.1.12...2.1.13) - 2022-06-07
- Add allow plugins in composer.json


#### Installer
- Fix default logo source url
- Fix some class extras
- add tags, fix employee has_role



## [2.1.12](https://gitlab.com/opencontent/opencity/compare/2.1.11...2.1.12) - 2022-03-02
- Fix docker-compose headers middleware Add redis cluster sample
- Show debug in clear cache script
- Add advanced cookie consent as default Update ini settings


#### Installer
- Update to version 2.1.12
- [installer][demo] Fix image links
- Add openufficiostampa installer

#### Code dependencies
| Changes                               | From     | To       | Compare                                                                                         |
|---------------------------------------|----------|----------|-------------------------------------------------------------------------------------------------|
| aws/aws-sdk-php                       | 3.202.1  | 3.211.1  | [...](https://github.com/aws/aws-sdk-php/compare/3.202.1...3.211.1)                             |
| clue/stream-filter                    | v1.5.0   | v1.6.0   | [...](https://github.com/clue/stream-filter/compare/v1.5.0...v1.6.0)                            |
| composer/installers                   | a241e78  | b8e490f  | [...](https://github.com/composer/installers/compare/a241e78...b8e490f)                         |
| friendsofsymfony/http-cache           | 2.11.0   | 2.13.0   | [...](https://github.com/FriendsOfSymfony/FOSHttpCache/compare/2.11.0...2.13.0)                 |
| google/apiclient                      | 7db9eb4  | v2.11.0  | [...](https://github.com/googleapis/google-api-php-client/compare/7db9eb4...v2.11.0)            |
| google/apiclient-services             | v0.221.0 | v0.237.0 | [...](https://github.com/googleapis/google-api-php-client-services/compare/v0.221.0...v0.237.0) |
| monolog/monolog                       | f19a2ae  | fb2c324  | [...](https://github.com/Seldaek/monolog/compare/f19a2ae...fb2c324)                             |
| opencontent/ocbootstrap-ls            | 1.10.12  | 1.10.13  | [...](https://github.com/OpencontentCoop/ocbootstrap/compare/1.10.12...1.10.13)                 |
| opencontent/occustomfind-ls           | 2.3.0    | 2.4.3    | [...](https://github.com/OpencontentCoop/occustomfind/compare/2.3.0...2.4.3)                    |
| opencontent/ocembed-ls                | 1.4.2    | 1.5.2    | [...](https://github.com/OpencontentCoop/ocembed/compare/1.4.2...1.5.2)                         |
| opencontent/ocinstaller               | 3a84656  | 828b25d  | [...](https://github.com/OpencontentCoop/ocinstaller/compare/3a84656...828b25d)                 |
| opencontent/ocopenapi-ls              | 1.3.8    | 1.3.11   | [...](https://github.com/OpencontentCoop/ocopenapi-ls/compare/1.3.8...1.3.11)                   |
| opencontent/ocopendata-ls             | 2.27.3   | 2.28.1   | [...](https://github.com/OpencontentCoop/ocopendata/compare/2.27.3...2.28.1)                    |
| opencontent/ocsearchtools-ls          | 1.11.1   | 1.11.2   | [...](https://github.com/OpencontentCoop/ocsearchtools/compare/1.11.1...1.11.2)                 |
| opencontent/ocsupport-ls              | c4e37a9  | 848dad7  | [...](https://github.com/OpencontentCoop/ocsupport/compare/c4e37a9...848dad7)                   |
| opencontent/openpa-ls                 | 3.13.5   | 3.13.7   | [...](https://github.com/OpencontentCoop/openpa/compare/3.13.5...3.13.7)                        |
| opencontent/openpa_bootstrapitalia-ls | 1.26.8   | 1.28.10  | [...](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.26.8...1.28.10)       |
| opencontent/openpa_newsletter-ls      | 2.9.6    | 2.9.8    | [...](https://github.com/OpencontentCoop/openpa_newsletter/compare/2.9.6...2.9.8)               |
| paragonie/constant_time_encoding      | v2.4.0   | v2.5.0   | [...](https://github.com/paragonie/constant_time_encoding/compare/v2.4.0...v2.5.0)              |
| php-http/client-common                | 2.4.0    | 2.5.0    | [...](https://github.com/php-http/client-common/compare/2.4.0...2.5.0)                          |
| php-http/httplug                      | 191a0a1  | f640739  | [...](https://github.com/php-http/httplug/compare/191a0a1...f640739)                            |
| php-http/message                      | 1.12.0   | 1.13.0   | [...](https://github.com/php-http/message/compare/1.12.0...1.13.0)                              |
| predis/predis                         | 4c1aada  | b3a5bdf  | [...](https://github.com/predis/predis/compare/4c1aada...b3a5bdf)                               |
| symfony/polyfill-ctype                | 3088518  | v1.24.0  | [...](https://github.com/symfony/polyfill-ctype/compare/3088518...v1.24.0)                      |
| symfony/polyfill-intl-idn             | 749045c  | v1.24.0  | [...](https://github.com/symfony/polyfill-intl-idn/compare/749045c...v1.24.0)                   |
| symfony/polyfill-intl-normalizer      | 8590a5f  | v1.24.0  | [...](https://github.com/symfony/polyfill-intl-normalizer/compare/8590a5f...v1.24.0)            |
| symfony/polyfill-mbstring             | 11b9acb  | v1.24.0  | [...](https://github.com/symfony/polyfill-mbstring/compare/11b9acb...v1.24.0)                   |
| symfony/polyfill-php72                | 9a14221  | v1.24.0  | [...](https://github.com/symfony/polyfill-php72/compare/9a14221...v1.24.0)                      |
| symfony/polyfill-php73                | cc5db0e  | v1.24.0  | [...](https://github.com/symfony/polyfill-php73/compare/cc5db0e...v1.24.0)                      |
| symfony/polyfill-php80                | 57b712b  | v1.24.0  | [...](https://github.com/symfony/polyfill-php80/compare/57b712b...v1.24.0)                      |
| zetacomponents/cache                  | 1.6      | 1.6.1    | [...](https://github.com/zetacomponents/Cache/compare/1.6...1.6.1)                              |
| zetacomponents/console-tools          | 1.7.2    | 1.7.3    | [...](https://github.com/zetacomponents/ConsoleTools/compare/1.7.2...1.7.3)                     |
| zetacomponents/database               | 1.5.1    | 1.5.2    | [...](https://github.com/zetacomponents/Database/compare/1.5.1...1.5.2)                         |
| zetacomponents/feed                   | 1.4      | 1.4.1    | [...](https://github.com/zetacomponents/Feed/compare/1.4...1.4.1)                               |


Relevant changes by repository:

**[opencontent/ocbootstrap-ls changes between 1.10.12 and 1.10.13](https://github.com/OpencontentCoop/ocbootstrap/compare/1.10.12...1.10.13)**
* Corregge un bug di visualizzazione del template di modifica di ezcountry

**[opencontent/occustomfind-ls changes between 2.3.0 and 2.4.3](https://github.com/OpencontentCoop/occustomfind/compare/2.3.0...2.4.3)**
* Dataset datatype: add map and counter view, allow import from google sheet, add email and url field type
* Allow set geo field format Fix translations Add counter settings
* Avoid fatal exposing stats results
* Fix edit dataset view connector (temp workaround)

**[opencontent/ocembed-ls changes between 1.4.2 and 1.5.2](https://github.com/OpencontentCoop/ocembed/compare/1.4.2...1.5.2)**
* Rifattorizza il sistema di cache Introduce un ezpfilter per il contenuto html Introduce un modulo di preview
* Fix bug in autoembed
* Verify max resolution image in youtube workaround

**[opencontent/ocinstaller changes between 3a84656 and 828b25d](https://github.com/OpencontentCoop/ocinstaller/compare/3a84656...828b25d)**
* Avoid workflow override

**[opencontent/ocopenapi-ls changes between 1.3.8 and 1.3.11](https://github.com/OpencontentCoop/ocopenapi-ls/compare/1.3.8...1.3.11)**
* Fix translations post put patch api
* Fix empty file serialization
* Bugfix in multilanguage api

**[opencontent/ocopendata-ls changes between 2.27.3 and 2.28.1](https://github.com/OpencontentCoop/ocopendata/compare/2.27.3...2.28.1)**
* Fix user attribute converter on disabled user
* Rebuild parent nodes according to payload params in api update Avoid duplicate locations in api move
* Use local filesystem in file storage for performance issue

**[opencontent/ocsearchtools-ls changes between 1.11.1 and 1.11.2](https://github.com/OpencontentCoop/ocsearchtools/compare/1.11.1...1.11.2)**
* Avoid php warning

**[opencontent/ocsupport-ls changes between c4e37a9 and 848dad7](https://github.com/OpencontentCoop/ocsupport/compare/c4e37a9...848dad7)**
* enable view cache in cron sqli handler
* Add reindex script

**[opencontent/openpa-ls changes between 3.13.5 and 3.13.7](https://github.com/OpencontentCoop/openpa/compare/3.13.5...3.13.7)**
* Allow using redis in cluster mode
* Corregge un bug nel sistema di calcolo di cambio stato in caso di attributi di tipo ezdate

**[opencontent/openpa_bootstrapitalia-ls changes between 1.26.8 and 1.28.10](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.26.8...1.28.10)**
* Estende l'indicizzazione custom rpt ai sotto attributi di tipo eZGmapLocation
* Aggiunge la configurazione mancante del modulo extraindex
* Rimuove eventuali script dai metadata opengraph
* Permette di customizzare la favicon tramite un attributo file della homepage (favicon)
* Corregge la visualizzazione degli eventi nella newsletter
* Corregge un errore sull'ordinamento delle faq
* Evita un errore grave nel parsing dei testi per opengraph
* Corregge un errore sull'ordinamento delle faq
* Corregge un problema di renderizzazione della mail prodotta dalla dashboard di moderazione
* Modifica la visualizzazione delle date usano lo standard locale Introduce un nuovo connettore per gli eztags per correggere la visualizzazione delle faccette Corregge alcune traduzioni in tedesco
* Impone il target blank ai contenuti shared link
* Corregge i font nel template della newsletter
* Rimuove la visualizzazione della data dai template newsletter
* Nasconde gli attributi info-collectors nel pagina di registrazione join
* Aggiunge l'attributo rel="noopener noreferrer" ai link con target blank
* Introduce una nuova versione del cookie consent
* Permette di disabilitare l'anteprima del video nelle visualizzazioni line e card (alt)
* Permette di configurare la versione del cookie consent da openpa.ini
* Introduce il bottone per rifiutare tutti i cookie nella barra dei cookie
* Corregge un problema nell'interfaccia di configurazione delle impostazioni di visualizzazione della vista elenco
* Introduce un blocco che permette la visualizzazione in anteprima di contenuti non accessibili
* Formatta un attributo matrice con identificatore "social" per inserire i contatti social (Facebook, Instagram, Linkedin, Twitter, Youtube, WhatsApp, Telegram)
* Visualizza nella pagina di login l'attributo layout di un oggetto il cui remote id è configurato in app.ini [LoginTemplate] LoginIntroObjectRemoteId
* Permette di inviare un messaggio privato dalla dashboard public/private in caso di gestione utenti
* Correggi alcuni problemi sul sistema cookie consent
* Correggi la visualizzazione mobile del sistema cookie consent
* Corregge alcuni bug minori
* Inserisce una stringa di traduzione mancante nel card-calendar
* Corregge l'etichetta dell'attributo Tipo di evento (has_public_event_typology)
* Corregge un errore di visualizzazione del calendario nella vista mensile
* Corregge alcuni problemi di accessibilità del cookie consent
* Introduce la vista card_teaser nei blocchi ListaManuale e ListaAutomatica
* Corregge un bug nella generazione del megamenu
* Corregge la traduzione del link per disiscriversi dalla newsletter
* Permette di verificare l'univocità del campo identificativo documento in fase di editing (document/has_code)
* Permette l'inserimento di file nella scorciatoia ajax di inserimento lotti
* Permette l'inserimento di file nella scorciatoia ajax di inserimento lotti
* Corregge un problema che si verificava nel blocco ricerca luoghi in caso di selezione di più tag
* Corregge alcuni problemi di overflow del testo nel card tesaser
* Aggiorna le stringhe di traduzione
* Corregge l'ingombro del cookie consent nel footer
* Permette di configurare il limiti dei link esposti in header
* Permette di configurare il controllo di univocità di altri campi di tipo stringa

**[opencontent/openpa_newsletter-ls changes between 2.9.6 and 2.9.8](https://github.com/OpencontentCoop/openpa_newsletter/compare/2.9.6...2.9.8)**
* Fix ger translations
* Fix sendy subscribe form


## [2.1.11](https://gitlab.com/opencontent/opencity/compare/2.1.10...2.1.11) - 2021-11-12
- Disable conditional debugging

#### Code dependencies
| Changes                               | From     | To       | Compare                                                                                         |
|---------------------------------------|----------|----------|-------------------------------------------------------------------------------------------------|
| aws/aws-sdk-php                       | 3.200.1  | 3.202.1  | [...](https://github.com/aws/aws-sdk-php/compare/3.200.1...3.202.1)                             |
| firebase/php-jwt                      | v5.5.0   | v5.5.1   | [...](https://github.com/firebase/php-jwt/compare/v5.5.0...v5.5.1)                              |
| google/apiclient-services             | v0.220.0 | v0.221.0 | [...](https://github.com/googleapis/google-api-php-client-services/compare/v0.220.0...v0.221.0) |
| opencontent/ocbootstrap-ls            | 1.10.11  | 1.10.12  | [...](https://github.com/OpencontentCoop/ocbootstrap/compare/1.10.11...1.10.12)                 |
| opencontent/ocopendata-ls             | 2.27.2   | 2.27.3   | [...](https://github.com/OpencontentCoop/ocopendata/compare/2.27.2...2.27.3)                    |
| opencontent/ocsupport-ls              | 184cf85  | c4e37a9  | [...](https://github.com/OpencontentCoop/ocsupport/compare/184cf85...c4e37a9)                   |
| opencontent/openpa-ls                 | 3.13.4   | 3.13.5   | [...](https://github.com/OpencontentCoop/openpa/compare/3.13.4...3.13.5)                        |
| opencontent/openpa_bootstrapitalia-ls | 1.26.1   | 1.26.8   | [...](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.26.1...1.26.8)        |
| opencontent/openpa_newsletter-ls      | 2.9.5    | 2.9.6    | [...](https://github.com/OpencontentCoop/openpa_newsletter/compare/2.9.5...2.9.6)               |


Relevant changes by repository:

**[opencontent/ocbootstrap-ls changes between 1.10.11 and 1.10.12](https://github.com/OpencontentCoop/ocbootstrap/compare/1.10.11...1.10.12)**
* Corregge alcune traduzioni in tedesco

**[opencontent/ocopendata-ls changes between 2.27.2 and 2.27.3](https://github.com/OpencontentCoop/ocopendata/compare/2.27.2...2.27.3)**
* Hotfix reloading modules

**[opencontent/ocsupport-ls changes between 184cf85 and c4e37a9](https://github.com/OpencontentCoop/ocsupport/compare/184cf85...c4e37a9)**
* Add run cronjob handler

**[opencontent/openpa-ls changes between 3.13.4 and 3.13.5](https://github.com/OpencontentCoop/openpa/compare/3.13.4...3.13.5)**
* Remove unused code

**[opencontent/openpa_bootstrapitalia-ls changes between 1.26.1 and 1.26.8](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.26.1...1.26.8)**
* Corregge la traduzione dei giorni della settimana nella matrice degli orari
* Rimuove il testo della ricerca dal title per evitare un debug error
* Corregge la visualizzazione dei link nell'header
* Corregge la visualizzazione dei link nell'header
* Corregge la visualizzazione dei link nell'header (repetita iuvant)
* Nasconde il blocco contatti dal footer se i contatti non sono popolati
* Corregge alcuni bug minori
* Introduce la richiesta di conferma all'invio di una dashboard newsletter
* Corregge un bug di traduzione

**[opencontent/openpa_newsletter-ls changes between 2.9.5 and 2.9.6](https://github.com/OpencontentCoop/openpa_newsletter/compare/2.9.5...2.9.6)**
* Add translations


## [2.1.10](https://gitlab.com/opencontent/opencity/compare/2.1.10rc2...2.1.10) - 2021-11-07
- Update php and nginx base images to 1.2.3-v2
- Fix AssignRole browse settings
- Remove shared volumes in docker-compose-dev file
- Fix some changelog missing info
- Update composer to v2
- Add some blacklisted file extensions


#### Installer
- Update to 2.1.10 Assign member role to Politici FIx concorso change state Add rss/feed role to Anonymous Update trasparenza to 0.0.13 fix Statuti e dei regolamenti
- Add link/abstract in overview
- Add shared link module

#### Code dependencies
| Changes                               | From        | To          | Compare                                                                                         |
|---------------------------------------|-------------|-------------|-------------------------------------------------------------------------------------------------|
| aws/aws-sdk-php                       | 3.199.9     | 3.200.1     | [...](https://github.com/aws/aws-sdk-php/compare/3.199.9...3.200.1)                             |
| composer/installers                   | f69761f     | a241e78     | [...](https://github.com/composer/installers/compare/f69761f...a241e78)                         |
| easyrdf/easyrdf                       | 12bd03d     | 111f65b     | [...](https://github.com/easyrdf/easyrdf/compare/12bd03d...111f65b)                             |
| ezsystems/ezpublish-legacy            | 2020.1000.6 | 2020.1000.7 | [...](https://github.com/Opencontent/ezpublish-legacy/compare/2020.1000.6...2020.1000.7)        |
| ezsystems/ezpublish-legacy-installer  | 38e402c     | d803123     | [...](https://github.com/Opencontent/ezpublish-legacy-installer/compare/38e402c...d803123)      |
| firebase/php-jwt                      | v5.4.0      | v5.5.0      | [...](https://github.com/firebase/php-jwt/compare/v5.4.0...v5.5.0)                              |
| friendsofsymfony/http-cache           | 239d08d     | 2.11.0      | [...](https://github.com/FriendsOfSymfony/FOSHttpCache/compare/239d08d...2.11.0)                |
| google/apiclient-services             | v0.219.0    | v0.220.0    | [...](https://github.com/googleapis/google-api-php-client-services/compare/v0.219.0...v0.220.0) |
| mtdowling/jmespath.php                | 30dfa00     | 9b87907     | [...](https://github.com/jmespath/jmespath.php/compare/30dfa00...9b87907)                       |
| opencontent/ocopendata-ls             | 2.27.1      | 2.27.2      | [...](https://github.com/OpencontentCoop/ocopendata/compare/2.27.1...2.27.2)                    |
| opencontent/ocsupport-ls              | 8071c61     | 184cf85     | [...](https://github.com/OpencontentCoop/ocsupport/compare/8071c61...184cf85)                   |
| opencontent/ocwebhookserver-ls        | 1.1.4       | 1.1.5       | [...](https://github.com/OpencontentCoop/ocwebhookserver/compare/1.1.4...1.1.5)                 |
| opencontent/openpa_bootstrapitalia-ls | 1.25.2      | 1.26.1      | [...](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.25.2...1.26.1)        |
| predis/predis                         | d72f067     | 4c1aada     | [...](https://github.com/predis/predis/compare/d72f067...4c1aada)                               |
| psr/cache                             | b9aa2cd     | 1.0.1       | [...](https://github.com/php-fig/cache/compare/b9aa2cd...1.0.1)                                 |
| psr/container                         | 381524e     | 1.1.x-dev   | [...](https://github.com/php-fig/container/compare/381524e...1.1.x-dev)                         |
| psr/event-dispatcher                  | 3ef040d     | aa4f89e     | [...](https://github.com/php-fig/event-dispatcher/compare/3ef040d...aa4f89e)                    |
| psr/simple-cache                      | 5a7b96b     | 1.0.1       | [...](https://github.com/php-fig/simple-cache/compare/5a7b96b...1.0.1)                          |
| symfony/event-dispatcher              | 5.x-dev     | 5.4.x-dev   | [...](https://github.com/symfony/event-dispatcher/compare/5.x-dev...5.4.x-dev)                  |
| symfony/options-resolver              | 5.x-dev     | 5.4.x-dev   | [...](https://github.com/symfony/options-resolver/compare/5.x-dev...5.4.x-dev)                  |
| symfony/polyfill-php81                | 5de4ba2     |             |                                                                                                 |
| symfony/var-exporter                  | 5.x-dev     | 5.4.x-dev   | [...](https://github.com/symfony/var-exporter/compare/5.x-dev...5.4.x-dev)                      |


Relevant changes by repository:

**[opencontent/ocopendata-ls changes between 2.27.1 and 2.27.2](https://github.com/OpencontentCoop/ocopendata/compare/2.27.1...2.27.2)**
* Reload modules in ContentRepository

**[opencontent/ocsupport-ls changes between 8071c61 and 184cf85](https://github.com/OpencontentCoop/ocsupport/compare/8071c61...184cf85)**
* Fix github auth api call Add from to options to make-changeòpg

**[opencontent/ocwebhookserver-ls changes between 1.1.4 and 1.1.5](https://github.com/OpencontentCoop/ocwebhookserver/compare/1.1.4...1.1.5)**
* Add job stats

**[opencontent/openpa_bootstrapitalia-ls changes between 1.25.2 and 1.26.1](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.25.2...1.26.1)**
* Corregge un errore nel template di visualizzazione degli attributi principali
* Introduce i template per la classe shared_link per virtualizzare contenuti remoti Visualizza la funzionalità webhooks in toolbar admin Corregge alcuni bug minori
* Cambia l'interfaccia di inserimento delle persone e delle strutture nel ruolo per aggirare il problema del numero elevato di elementi da caricare in select


## [2.1.10rc2](https://gitlab.com/opencontent/opencity/compare/2.1.10rc1...2.1.10rc2) - 2021-11-03
- Update block.ini
- Add expired certificate workaround


#### Installer
- Fix anonymous role in trasparenza
- Add classes lotto, dataset_lotto in trasparenza

#### Code dependencies
| Changes                               | From      | To        | Compare                                                                                         |
|---------------------------------------|-----------|-----------|-------------------------------------------------------------------------------------------------|
| aws/aws-sdk-php                       | 3.193.0   | 3.199.9   | [...](https://github.com/aws/aws-sdk-php/compare/3.193.0...3.199.9)                             |
| erasys/openapi-php                    | 9885e8f   | 3.3.0     | [...](https://github.com/erasys/openapi-php/compare/9885e8f...3.3.0)                            |
| friendsofsymfony/http-cache           | a501495   | 239d08d   | [...](https://github.com/FriendsOfSymfony/FOSHttpCache/compare/a501495...239d08d)               |
| google/apiclient                      | 3a98175   | 7db9eb4   | [...](https://github.com/googleapis/google-api-php-client/compare/3a98175...7db9eb4)            |
| google/apiclient-services             | v0.211.0  | v0.219.0  | [...](https://github.com/googleapis/google-api-php-client-services/compare/v0.211.0...v0.219.0) |
| guzzlehttp/promises                   | 60d379c   | fe752ae   | [...](https://github.com/guzzle/promises/compare/60d379c...fe752ae)                             |
| illuminate/contracts                  | 6.x-dev   | 7.x-dev   | [...](https://github.com/illuminate/contracts/compare/6.x-dev...7.x-dev)                        |
| monolog/monolog                       | f2156cd   | f19a2ae   | [...](https://github.com/Seldaek/monolog/compare/f2156cd...f19a2ae)                             |
| opencontent/googlesheet               | 63b7197   | 7d19be0   | [...](https://github.com/OpencontentCoop/googlesheet/compare/63b7197...7d19be0)                 |
| opencontent/ocbootstrap-ls            | 1.10.10   | 1.10.11   | [...](https://github.com/OpencontentCoop/ocbootstrap/compare/1.10.10...1.10.11)                 |
| opencontent/ocmultibinary-ls          | 3.0.8     | 3.0.11    | [...](https://github.com/OpencontentCoop/ocmultibinary/compare/3.0.8...3.0.11)                  |
| opencontent/ocopendata-ls             | 2.25.7    | 2.27.1    | [...](https://github.com/OpencontentCoop/ocopendata/compare/2.25.7...2.27.1)                    |
| opencontent/openpa-ls                 | 3.13.3    | 3.13.4    | [...](https://github.com/OpencontentCoop/openpa/compare/3.13.3...3.13.4)                        |
| opencontent/openpa_bootstrapitalia-ls | 1.23.3    | 1.25.2    | [...](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.23.3...1.25.2)        |
| opencontent/openpa_newsletter-ls      | 2.9.4     | 2.9.5     | [...](https://github.com/OpencontentCoop/openpa_newsletter/compare/2.9.4...2.9.5)               |
| php-http/discovery                    | 1.14.0    | 1.14.1    | [...](https://github.com/php-http/discovery/compare/1.14.0...1.14.1)                            |
| symfony/deprecation-contracts         | 6f981ee   | 2.5.x-dev | [...](https://github.com/symfony/deprecation-contracts/compare/6f981ee...2.5.x-dev)             |
| symfony/polyfill-ctype                | 46cd957   | 3088518   | [...](https://github.com/symfony/polyfill-ctype/compare/46cd957...3088518)                      |
| symfony/polyfill-intl-idn             | 65bd267   | 749045c   | [...](https://github.com/symfony/polyfill-intl-idn/compare/65bd267...749045c)                   |
| symfony/polyfill-mbstring             | 9174a3d   | 11b9acb   | [...](https://github.com/symfony/polyfill-mbstring/compare/9174a3d...11b9acb)                   |
| symfony/polyfill-php73                | fba8933   | cc5db0e   | [...](https://github.com/symfony/polyfill-php73/compare/fba8933...cc5db0e)                      |
| symfony/polyfill-php80                | 1100343   | 57b712b   | [...](https://github.com/symfony/polyfill-php80/compare/1100343...57b712b)                      |
| symfony/polyfill-php81                |           | 5de4ba2   |                                                                                                 |
| symfony/yaml                          | 4.4.x-dev | 5.4.x-dev | [...](https://github.com/symfony/yaml/compare/4.4.x-dev...5.4.x-dev)                            |

Relevant changes by repository:

**[opencontent/googlesheet changes between 63b7197 and 7d19be0](https://github.com/OpencontentCoop/googlesheet/compare/63b7197...7d19be0)**
* Update composer.json

**[opencontent/ocbootstrap-ls changes between 1.10.10 and 1.10.11](https://github.com/OpencontentCoop/ocbootstrap/compare/1.10.10...1.10.11)**
* Aggiorna le stringhe di traduzione

**[opencontent/ocmultibinary-ls changes between 3.0.8 and 3.0.11](https://github.com/OpencontentCoop/ocmultibinary/compare/3.0.8...3.0.11)**
* Bugfix in boostrapitalia view
* Fix default view in bootstrapitalia design
* Fix regression in bootstrapitalia tempalte Add fix script

**[opencontent/ocopendata-ls changes between 2.25.7 and 2.27.1](https://github.com/OpencontentCoop/ocopendata/compare/2.25.7...2.27.1)**
* Add delete and move api
* Add upsert api
* Fix http status code in exceptions
* Change base attribute validation (from string to scalar)

**[opencontent/openpa-ls changes between 3.13.3 and 3.13.4](https://github.com/OpencontentCoop/openpa/compare/3.13.3...3.13.4)**
* Avoid php 7.3 warning

**[opencontent/openpa_bootstrapitalia-ls changes between 1.23.3 and 1.25.2](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.23.3...1.25.2)**
* Introduce le visualizzazioni per le classi lotto e dataset_lotto
* Corregge un problema nell'interfaccia di inserimento dei lotti
* Corregge una vulnerabilità xss
* Corregge un bug di consistenza in openparole
* Uniforma le etichette dei bottoni in content/edit
* Introduce un suffisso nel titolo delle card se presente e selezionato l'attributo is_online (bolzano)
* Permette di selezionare la tipologia di vista nel blocco contenuti remoti
* Hotfix configurazione di override
* Visualizza il suffisso al titolo nei banner
* Corregge alcuni errori di traduzione
* Evita un fatal error in editorialstuff se non è installata l'estensione ocevent
* Migliora la visualizzazione tabellare dei file multipli
* Corregge lo stile del suffisso al titolo
* Rende più flessibile la configurazione del blocco Ricerca documenti

**[opencontent/openpa_newsletter-ls changes between 2.9.4 and 2.9.5](https://github.com/OpencontentCoop/openpa_newsletter/compare/2.9.4...2.9.5)**
* Ignore verify peer on remote sendy

## [2.1.10rc1](https://gitlab.com/opencontent/opencity/compare/2.1.9...2.1.10rc1) - 2021-09-09


#### Code dependencies
| Changes                               | From    | To      | Compare                                                                                  |
|---------------------------------------|---------|---------|------------------------------------------------------------------------------------------|
| aws/aws-sdk-php                       | 3.192.1 | 3.193.0 | [...](https://github.com/aws/aws-sdk-php/compare/3.192.1...3.193.0)                      |
| opencontent/ocbootstrap-ls            | 1.10.9  | 1.10.10 | [...](https://github.com/OpencontentCoop/ocbootstrap/compare/1.10.9...1.10.10)           |
| opencontent/openpa_bootstrapitalia-ls | 1.23.1  | 1.23.3  | [...](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.23.1...1.23.3) |

Relevant changes by repository:

**[opencontent/ocbootstrap-ls changes between 1.10.9 and 1.10.10](https://github.com/OpencontentCoop/ocbootstrap/compare/1.10.9...1.10.10)**
* Corregge un bug nel formato delle date prodotte dal calendario di supporto di ocevent

**[opencontent/openpa_bootstrapitalia-ls changes between 1.23.1 and 1.23.3](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.23.1...1.23.3)**
* Indicizza i document extra con accesso anonimo
* Corregge un bug nel template della newsletter per cui i link nel footer non comparivano correttamente
* Utilizza il campo editor_access_in_footer dell'homepage (se presente) per maggiore flessibilità di configurazione al bottone di Accesso area personale

## [2.1.9](https://gitlab.com/opencontent/opencity/compare/2.1.9rc3...2.1.9) - 2021-09-08
- Update block.ini


#### Installer
- Fix opening_hours_specification reverse related attribute list
- Remove duplicate role Gestione-Area-riservata
- Remove topic Comune from trasparenza fields
- Fix some class translation
- Update to version 2.1.9
- Add Dashboard Luoghi role
- Add rss to Editor Backend role
- Fix update webhooks sql
- Trasparenza: fix dirigenti query parms
- Fix some class extras in employee and topic
- Allow insert politico in topic/managed_by_political_body
- Add reverse related in opening_hours_specification
- Enable multibinary decoration
- Fix openparole in administrative_area

#### Code dependencies
| Changes                               | From     | To       | Compare                                                                                         |
|---------------------------------------|----------|----------|-------------------------------------------------------------------------------------------------|
| aws/aws-crt-php                       |          | v1.0.2   |                                                                                                 |
| aws/aws-sdk-php                       | 3.191.5  | 3.192.1  | [...](https://github.com/aws/aws-sdk-php/compare/3.191.5...3.192.1)                             |
| google/apiclient                      | 11871e9  | 3a98175  | [...](https://github.com/googleapis/google-api-php-client/compare/11871e9...3a98175)            |
| google/apiclient-services             | v0.209.0 | v0.211.0 | [...](https://github.com/googleapis/google-api-php-client-services/compare/v0.209.0...v0.211.0) |
| opencontent/ocmultibinary-ls          | 3.0.6    | 3.0.8    | [...](https://github.com/OpencontentCoop/ocmultibinary/compare/3.0.6...3.0.8)                   |
| opencontent/ocwebhookserver-ls        | f1dcb76  | 1.1.4    | [...](https://github.com/OpencontentCoop/ocwebhookserver/compare/f1dcb76...1.1.4)               |
| opencontent/openpa-ls                 | 3.13.2   | 3.13.3   | [...](https://github.com/OpencontentCoop/openpa/compare/3.13.2...3.13.3)                        |
| opencontent/openpa_bootstrapitalia-ls | 1.22.3   | 1.23.1   | [...](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.22.3...1.23.1)        |
| php-http/message                      | 1.11.2   | 1.12.0   | [...](https://github.com/php-http/message/compare/1.11.2...1.12.0)                              |


Relevant changes by repository:

**[opencontent/ocmultibinary-ls changes between 3.0.6 and 3.0.8](https://github.com/OpencontentCoop/ocmultibinary/compare/3.0.6...3.0.8)**
* Avoid file name duplication (bootstrapitalia)
* Fix default clean filename

**[opencontent/ocwebhookserver-ls changes between f1dcb76 and 1.1.4](https://github.com/OpencontentCoop/ocwebhookserver/compare/f1dcb76...1.1.4)**
* Add bootstrapitalia design

**[opencontent/openpa-ls changes between 3.13.2 and 3.13.3](https://github.com/OpencontentCoop/openpa/compare/3.13.2...3.13.3)**
* Corregge le regole di default del robots.txt per permettere l'indicizzazione dei contenuti opendata

**[opencontent/openpa_bootstrapitalia-ls changes between 1.22.3 and 1.23.1](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.22.3...1.23.1)**
* Fix typo
* Permette di controllare la visualizzazione del menu trasparenza dall'oggetto trasparenza
* Corregge alcuni bug minori Permette la configurazione di campi obbligatori nella classe valutazione Consente di utilizzare il blocco html in modalità wide Introduce un api per aggiungere contenuti esterni nei risultati del motore di ricerca (beta) Introduce una nuova vista Immagine decorativa per il blocco singolo Consente di esportare in csv l'elenco delle valutazioni inserite dagli utenti Consente di attivare o disattivare tutti i permessi di accesso per ciascun utente Visualizza il punto di contatto del box di aiuto nella pagina argomento Permette di aggiungere un testo introduttivo in tutti i blocchi Rimuove il numero tra parentesi dal nome visualizzato
* Corregge il colore dei caratteri dell'header nel tema warmred (bolzano)
* Migliora la visualizzazione dell'attributo public_service/has_temporal_coverage


## [2.1.9rc3](https://gitlab.com/opencontent/opencity/compare/2.1.9rc2...2.1.9rc3) - 2021-08-27



#### Installer
- add webhook migration sql
- fix valuation class

#### Code dependencies
| Changes                      | From    | To      | Compare                                                                                |
|------------------------------|---------|---------|----------------------------------------------------------------------------------------|
| aws/aws-sdk-php              | 3.191.2 | 3.191.5 | [...](https://github.com/aws/aws-sdk-php/compare/3.191.2...3.191.5)                    |
| google/auth                  | v1.17.0 | v1.18.0 | [...](https://github.com/googleapis/google-auth-library-php/compare/v1.17.0...v1.18.0) |
| opencontent/googlesheet      | 1bcc065 | 63b7197 | [...](https://github.com/OpencontentCoop/googlesheet/compare/1bcc065...63b7197)        |
| opencontent/ocmultibinary-ls | 2.3.1   | 3.0.6   | [...](https://github.com/OpencontentCoop/ocmultibinary/compare/2.3.1...3.0.6)          |


Relevant changes by repository:

**[opencontent/googlesheet changes between 1bcc065 and 63b7197](https://github.com/OpencontentCoop/googlesheet/compare/1bcc065...63b7197)**
* Add ez multi-installation helper to retrieve credential file
* Typo fix

**[opencontent/ocmultibinary-ls changes between 2.3.1 and 3.0.6](https://github.com/OpencontentCoop/ocmultibinary/compare/2.3.1...3.0.6)**
* Allow decorate file list with display name, group and extra text
* Fix concurrent upload
* Add CSRF token in ajax post
* Store decorations on async upload new file
* Update translations
* Add table headers in decoration edit gui
* Bug fix in class edit


## [2.1.9rc2](https://gitlab.com/opencontent/opencity/compare/2.1.9rc1...2.1.9rc2) - 2021-08-24
- Update google sheet version api access Add dummy google credentials file
- Fix Dockerfile.solr volume

#### Code dependencies
| Changes                               | From     | To        | Compare                                                                                  |
|---------------------------------------|----------|-----------|------------------------------------------------------------------------------------------|
| asimlqt/php-google-spreadsheet-client | v3.x-dev |           |                                                                                          |
| aws/aws-sdk-php                       | 3.185.2  | 3.191.2   | [...](https://github.com/aws/aws-sdk-php/compare/3.185.2...3.191.2)                      |
| firebase/php-jwt                      |          | v5.4.0    |                                                                                          |
| friendsofsymfony/http-cache           | cbc3f7d  | a501495   | [...](https://github.com/FriendsOfSymfony/FOSHttpCache/compare/cbc3f7d...a501495)        |
| google/apiclient                      |          | 11871e9   |                                                                                          |
| google/apiclient-services             |          | v0.209.0  |                                                                                          |
| google/auth                           |          | v1.17.0   |                                                                                          |
| maxh/php-nominatim                    | 44161dc  | 2.2.0     | [...](https://github.com/maxhelias/php-nominatim/compare/44161dc...2.2.0)                |
| monolog/monolog                       |          | f2156cd   |                                                                                          |
| opencontent/googlesheet               |          | 1bcc065   |                                                                                          |
| opencontent/occhart-ls                | 1.2.0    | v2.x-dev  | [...](https://github.com/OpencontentCoop/occhart/compare/1.2.0...v2.x-dev)               |
| opencontent/occsvimport-ls            | 2.5.2    | v3.x-dev  | [...](https://github.com/OpencontentCoop/occsvimport/compare/2.5.2...v3.x-dev)           |
| opencontent/oci18n                    | 07816bd  | c67c37e   | [...](https://github.com/OpencontentCoop/oci18n/compare/07816bd...c67c37e)               |
| opencontent/ocwebhookserver-ls        | a60d571  | f1dcb76   | [...](https://github.com/OpencontentCoop/ocwebhookserver/compare/a60d571...f1dcb76)      |
| opencontent/openpa_bootstrapitalia-ls | 1.22.0   | 1.22.3    | [...](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.22.0...1.22.3) |
| paragonie/constant_time_encoding      |          | v2.4.0    |                                                                                          |
| paragonie/random_compat               |          | v9.99.100 |                                                                                          |
| php-http/client-common                | e37e46c  | 2.4.0     | [...](https://github.com/php-http/client-common/compare/e37e46c...2.4.0)                 |
| php-http/message                      | 1.11.1   | 1.11.2    | [...](https://github.com/php-http/message/compare/1.11.1...1.11.2)                       |
| phpseclib/phpseclib                   |          | 3.0.x-dev |                                                                                          |
| psr/log                               | d49695b  | 1.1.4     | [...](https://github.com/php-fig/log/compare/d49695b...1.1.4)                            |
| symfony/cache-contracts               | v2.4.0   | 2.5.x-dev | [...](https://github.com/symfony/cache-contracts/compare/v2.4.0...2.5.x-dev)             |
| symfony/deprecation-contracts         | 36b691b  | 6f981ee   | [...](https://github.com/symfony/deprecation-contracts/compare/36b691b...6f981ee)        |
| symfony/event-dispatcher-contracts    | v2.4.0   | 2.5.x-dev | [...](https://github.com/symfony/event-dispatcher-contracts/compare/v2.4.0...2.5.x-dev)  |
| symfony/polyfill-php80                | eca0bf4  | 1100343   | [...](https://github.com/symfony/polyfill-php80/compare/eca0bf4...1100343)               |
| symfony/service-contracts             | v2.4.0   | 2.5.x-dev | [...](https://github.com/symfony/service-contracts/compare/v2.4.0...2.5.x-dev)           |
| zetacomponents/base                   | 1.9.1    | 1.9.3     | [...](https://github.com/zetacomponents/Base/compare/1.9.1...1.9.3)                      |


Relevant changes by repository:

**[opencontent/oci18n changes between 07816bd and c67c37e](https://github.com/OpencontentCoop/oci18n/compare/07816bd...c67c37e)**
* Update google api

**[opencontent/ocwebhookserver-ls changes between a60d571 and f1dcb76](https://github.com/OpencontentCoop/ocwebhookserver/compare/a60d571...f1dcb76)**
* Add retry system
* Bugfix sql update
* Make pusher request timeout configurable by ini
* Fix retry calculation
* Add single job view
* Fix cleanup on maximum number of attempts reached

**[opencontent/openpa_bootstrapitalia-ls changes between 1.22.0 and 1.22.3](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.22.0...1.22.3)**
* Aumenta il limite nella ricerca dei luoghi in edit dell'evento
* Corregge un bug sulla visualizzazione della sezione di faq
* Permette di personalizzare l'etichetta Informazioni del footer e di specificare molteplici link sul contatto web
* Corregge alcuni problemi di validazione wcag in wave
* Aggiunge alcune traduzioni mancanti della pagina trasparenza
* Visualizza il menu utente per l'utente loggato anche quando è disabilitata la visualizzazione del bottone di accesso


## [2.1.9rc1](https://gitlab.com/opencontent/opencity/compare/2.1.8...2.1.9rc1) - 2021-08-20
- Hotfix ocopendata


#### Installer
- Update faq to 0.0.2 fixing role
- fix query in patch orari strutture

#### Code dependencies
| Changes                   | From   | To     | Compare                                                                      |
|---------------------------|--------|--------|------------------------------------------------------------------------------|
| opencontent/ocopendata-ls | 2.25.5 | 2.25.7 | [...](https://github.com/OpencontentCoop/ocopendata/compare/2.25.5...2.25.7) |


Relevant changes by repository:

**[opencontent/ocopendata-ls changes between 2.25.5 and 2.25.7](https://github.com/OpencontentCoop/ocopendata/compare/2.25.5...2.25.7)**
* Evita di ridondare le virgolette nelle parser delle query in formato stringa
* Corregge il percorso di download nella conversione a ckan della risorsa di tipo eZBinaryFile
* Corregge una potenziale vulnerabilità nel repository delle api


## [2.1.8](https://gitlab.com/opencontent/opencity/compare/2.1.7...2.1.8) - 2021-06-28
- Add traefik default demo certs
- Update block.ini and ezjscire.ini Add default ezscriptmonitor.ini


#### Installer
- Update trasparenza to 0.0.10 fixing time_indexed_role views
- Update to 2.1.8
- Rename Orari strutture
- Add new Tipi-di-luogo tag
- Add new role Editor-sito and fix other editor roles
- Bugifx in class topic Fix some class extras (employee abstract, political_body card teaser, public_service output_notes
- Add faq system installer module

#### Code dependencies
| Changes                               | From    | To      | Compare                                                                                  |
|---------------------------------------|---------|---------|------------------------------------------------------------------------------------------|
| aws/aws-sdk-php                       | 3.180.1 | 3.185.2 | [...](https://github.com/aws/aws-sdk-php/compare/3.180.1...3.185.2)                      |
| ezsystems/ezscriptmonitor-ls          |         | 62d3d72 |                                                                                          |
| friendsofsymfony/http-cache           | fa9abf6 | cbc3f7d | [...](https://github.com/FriendsOfSymfony/FOSHttpCache/compare/fa9abf6...cbc3f7d)        |
| opencontent/ocbootstrap-ls            | 1.10.5  | 1.10.9  | [...](https://github.com/OpencontentCoop/ocbootstrap/compare/1.10.5...1.10.9)            |
| opencontent/occustomfind-ls           | 2.2.3   | 2.3.0   | [...](https://github.com/OpencontentCoop/occustomfind/compare/2.2.3...2.3.0)             |
| opencontent/ocopendata-ls             | 2.25.4  | 2.25.5  | [...](https://github.com/OpencontentCoop/ocopendata/compare/2.25.4...2.25.5)             |
| opencontent/openpa-ls                 | c68a756 | 3.13.2  | [...](https://github.com/OpencontentCoop/openpa/compare/c68a756...3.13.2)                |
| opencontent/openpa_bootstrapitalia-ls | 1.19.3  | 1.22.0  | [...](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.19.3...1.22.0) |
| php-http/discovery                    | 1.13.0  | 1.14.0  | [...](https://github.com/php-http/discovery/compare/1.13.0...1.14.0)                     |
| php-http/message                      | 1.11.0  | 1.11.1  | [...](https://github.com/php-http/message/compare/1.11.0...1.11.1)                       |
| symfony/cache-contracts               | c044646 | v2.4.0  | [...](https://github.com/symfony/cache-contracts/compare/c044646...v2.4.0)               |
| symfony/deprecation-contracts         | 5f38c88 | 36b691b | [...](https://github.com/symfony/deprecation-contracts/compare/5f38c88...36b691b)        |
| symfony/event-dispatcher-contracts    | 69fee1a | v2.4.0  | [...](https://github.com/symfony/event-dispatcher-contracts/compare/69fee1a...v2.4.0)    |
| symfony/polyfill-intl-idn             | 780e280 | 65bd267 | [...](https://github.com/symfony/polyfill-intl-idn/compare/780e280...65bd267)            |
| symfony/polyfill-mbstring             | 9ad2f3c | 9174a3d | [...](https://github.com/symfony/polyfill-mbstring/compare/9ad2f3c...9174a3d)            |
| symfony/polyfill-php72                | 95695b8 | 9a14221 | [...](https://github.com/symfony/polyfill-php72/compare/95695b8...9a14221)               |
| symfony/service-contracts             | f040a30 | v2.4.0  | [...](https://github.com/symfony/service-contracts/compare/f040a30...v2.4.0)             |
| opencontent/ocinstaller               | 95b1463 | 3a84656 | [...](https://github.com/OpencontentCoop/ocinstaller/compare/95b1463...3a84656)          |

Relevant changes by repository:

**[opencontent/ocbootstrap-ls changes between 1.10.5 and 1.10.9](https://github.com/OpencontentCoop/ocbootstrap/compare/1.10.5...1.10.9)**
* Protegge con CSRF token la chiamata post ajax di ocmultibinary
* Aggiorna la stringhe di traduzione
* Aggiorna la stringhe di traduzione
* Introduce un workaround per evitare che Chrome auto-popoli il campo ezuser
* Aggiorna le stringhe di traduzione

**[opencontent/occustomfind-ls changes between 2.2.3 and 2.3.0](https://github.com/OpencontentCoop/occustomfind/compare/2.2.3...2.3.0)**
* Add opendatadataset openapi provider

**[opencontent/ocopendata-ls changes between 2.25.4 and 2.25.5](https://github.com/OpencontentCoop/ocopendata/compare/2.25.4...2.25.5)**
* Permette di definire una blacklist dei metadati esposti agli utenti anonimi

**[opencontent/openpa-ls changes between c68a756 and 3.13.2](https://github.com/OpencontentCoop/openpa/compare/c68a756...3.13.2)**
* Permette l'accesso a openpa/roles a gui custom (bootstrapitalia)
* Migliora lo script di creazione di una nuova istanza
* Corregge alcuni potenziali problemi di sicurezza xss
* Evoluzione di robots.txt per bloccare i bad crawler
* Coregge un problema nella creazione dell'oranigramma  2874
* Considera content_tag_menu nel calcolo del tree menu
* In openpa/object viene considerato il main node
* Aggiunge WhatsApp e Telegram tra i valori possibili dei contatti
* Aggiunge il codice SDI ai contatti
* Aggiunge la possibilità di escludere alberature dai menu
* Rimuovo ruolo e ruolo2 da ContentMain/AbstractIdentifiers  1940
* Aggiunge TikTok ai possibili contatti
* Aggiunge il link all'area personale ai valori inseribili nei contatti
* Corregge un errore nella funzione di template per la ricerca delle strutture
* Corregge un bug nella definizione degli handler dei blocchi
* Permette la personalizzazione dei valori head/meta da openpa/seo
* Visualizza la versione dell'installer se presente in CreditSettings/CodeVersion
* Corregge un bug in openpa/object
* Corregge la fetch per il controllo degli stati
* Permette a content_link di riconoscere se un link è al nodo o a un nodo/link esterno
* Corregge un possibile errore nel calcolo delle aree tematiche
* Corregge un typo in cookie
* Migliora la visualizzazione della versione del software
* Corregge l'id del tree menu in caso di menu virtualizzato su alberatura di tag
* Permette la configurazione di Google Recaptcha v3
* Aggiorna le configurazioni degli attributi di classe direttamente dal openpa/recaptcha
* Permette l'inserimento del codice Web Analytics Italia
* Fixed key definition name in openpaini
* Permette di gestire tramite permessi il menu trasparenza
* Merge branch 'master' into version3   Conflicts:  	bin/php/create_instance.php  	classes/openpaini.php  	design/standard/templates/openpa/seo.tpl
* Corregge un bug nel modulo usage/metrics
* Corregge un possibile errore nel salvataggio della matrice dei contatti (e introduce uno script per il fix del pregresso)
* Merge branch 'master' into version3 Corregge un possibile errore nel salvataggio della matrice dei contatti (e introduce uno script per il fix del pregresso)
* Ordina le serie nel grafico delle partecipazioni
* Merge branch 'master' into version3
* Considera l'effettiva capacità di lettura dell'utente degli oggetti correlati nella definizione di hasContent per attributi di tipo eZObjectRelationListType
* Corregge alcuni bug minori
* Nella configurazione dispatcher cluster: sostituisce l'handler local con s3_private_cache e rende i bucket configurabili separatamente
* Corregge la lingua di destinazione nel modulo per la copia dell'oggetto (openpa/add)
* Corregge una vulnerabilità xss nel nome utente
* Merge branch 'master' into version3

**[opencontent/openpa_bootstrapitalia-ls changes between 1.19.3 and 1.22.0](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.19.3...1.22.0)**
* Corregge un id duplicato in website toolbar
* Corregge un bug per cui la dashboard di moderazione privacy non imponeva lo stato corretto
* Introduce un workaround per invalidare la cache della pagina Aree riservate
* Corregge la visualizzazione mobile dei bottoni dell'header
* Nel motore di ricerca di sezione preseleziona il filtro sulla pagina corrente se presente nei filtri di ricerca
* Permette di selezionare un'alberatura di tag dalla configurazione dei blocchi
* Visualizza il limite massimo di caricamento dei file
* Corregge la visualizzazione dei filtri nel blocco contenuti remoti
* Migliora l'interfaccia di modifica dei blocchi
* Corregge la pagina di redirect dopo la creazione/modifica di un contenuto
* Corregge un bug sulla ricerca nel blocco contenuti remoti
* Introduce un sistema di visualizzazione di faq
* Corregge alcuni bug minori
* Permette la creazione/modifica di faq inline
* Aggiorna le stringhe di traduzione
* Nasconde l'icona che permette di espandere il menu una volta espanso
* Permette di configurare le varianti del tema bi per la testata
* Corregge un bug di visualizzazione dell'icona menu
* Permette di filtrare la lista dei ruoli politico/amministrativi per ruoli scaduti
* Visualizza la toolbar in tutti i moduli
* Corregge un problema di visualizzazione dei filtri nella pagina di ricerca
* Customizza la visualizzazione della card-image per la classe grafico e dataset Migliora l'interfaccia di edit del grafico
* Corregge un errore di configurazione dei blocchi
* Corregge un problema di visualizzazione dei blocchi nelle pagine trasparenza
* Aggiunge un bordo alla toolbar

**[opencontent/ocinstaller changes between 95b1463 and 3a84656](https://github.com/OpencontentCoop/ocinstaller/compare/95b1463...3a84656)**
* Fix patch content attribute parser


## [2.1.8-rc.1](https://gitlab.com/opencontent/opencity/compare/2.1.7...2.1.8-rc.1) - 2021-06-28
- Update changelog and publiccode
- Add traefik default demo certs
- Update block.ini and ezjscire.ini Add default ezscriptmonitor.ini


#### Installer
- Update trasparenza to 0.0.10 fixing time_indexed_role views
- Update to 2.1.8
- Rename Orari strutture
- Add new Tipi-di-luogo tag
- Add new role Editor-sito and fix other editor roles
- Bugifx in class topic Fix some class extras (employee abstract, political_body card teaser, public_service output_notes,

#### Code dependencies
| Changes                               | From    | To      | Compare                                                                                  |
|---------------------------------------|---------|---------|------------------------------------------------------------------------------------------|
| aws/aws-sdk-php                       | 3.180.1 | 3.185.2 | [...](https://github.com/aws/aws-sdk-php/compare/3.180.1...3.185.2)                      |
| ezsystems/ezscriptmonitor-ls          |         | 62d3d72 |                                                                                          |
| friendsofsymfony/http-cache           | fa9abf6 | cbc3f7d | [...](https://github.com/FriendsOfSymfony/FOSHttpCache/compare/fa9abf6...cbc3f7d)        |
| opencontent/ocbootstrap-ls            | 1.10.5  | 1.10.9  | [...](https://github.com/OpencontentCoop/ocbootstrap/compare/1.10.5...1.10.9)            |
| opencontent/occustomfind-ls           | 2.2.3   | 2.3.0   | [...](https://github.com/OpencontentCoop/occustomfind/compare/2.2.3...2.3.0)             |
| opencontent/ocopendata-ls             | 2.25.4  | 2.25.5  | [...](https://github.com/OpencontentCoop/ocopendata/compare/2.25.4...2.25.5)             |
| opencontent/openpa-ls                 | c68a756 | 3.13.2  | [...](https://github.com/OpencontentCoop/openpa/compare/c68a756...3.13.2)                |
| opencontent/openpa_bootstrapitalia-ls | 1.19.3  | 1.22.0  | [...](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.19.3...1.22.0) |
| php-http/discovery                    | 1.13.0  | 1.14.0  | [...](https://github.com/php-http/discovery/compare/1.13.0...1.14.0)                     |
| php-http/message                      | 1.11.0  | 1.11.1  | [...](https://github.com/php-http/message/compare/1.11.0...1.11.1)                       |
| symfony/cache-contracts               | c044646 | v2.4.0  | [...](https://github.com/symfony/cache-contracts/compare/c044646...v2.4.0)               |
| symfony/deprecation-contracts         | 5f38c88 | 36b691b | [...](https://github.com/symfony/deprecation-contracts/compare/5f38c88...36b691b)        |
| symfony/event-dispatcher-contracts    | 69fee1a | v2.4.0  | [...](https://github.com/symfony/event-dispatcher-contracts/compare/69fee1a...v2.4.0)    |
| symfony/polyfill-intl-idn             | 780e280 | 65bd267 | [...](https://github.com/symfony/polyfill-intl-idn/compare/780e280...65bd267)            |
| symfony/polyfill-mbstring             | 9ad2f3c | 9174a3d | [...](https://github.com/symfony/polyfill-mbstring/compare/9ad2f3c...9174a3d)            |
| symfony/polyfill-php72                | 95695b8 | 9a14221 | [...](https://github.com/symfony/polyfill-php72/compare/95695b8...9a14221)               |
| symfony/service-contracts             | f040a30 | v2.4.0  | [...](https://github.com/symfony/service-contracts/compare/f040a30...v2.4.0)             |


Relevant changes by repository:

**[opencontent/ocbootstrap-ls changes between 1.10.5 and 1.10.9](https://github.com/OpencontentCoop/ocbootstrap/compare/1.10.5...1.10.9)**
* Protegge con CSRF token la chiamata post ajax di ocmultibinary
* Aggiorna la stringhe di traduzione
* Aggiorna la stringhe di traduzione
* Introduce un workaround per evitare che Chrome auto-popoli il campo ezuser
* Aggiorna le stringhe di traduzione

**[opencontent/occustomfind-ls changes between 2.2.3 and 2.3.0](https://github.com/OpencontentCoop/occustomfind/compare/2.2.3...2.3.0)**
* Add opendatadataset openapi provider

**[opencontent/ocopendata-ls changes between 2.25.4 and 2.25.5](https://github.com/OpencontentCoop/ocopendata/compare/2.25.4...2.25.5)**
* Permette di definire una blacklist dei metadati esposti agli utenti anonimi

**[opencontent/openpa-ls changes between c68a756 and 3.13.2](https://github.com/OpencontentCoop/openpa/compare/c68a756...3.13.2)**
* Permette l'accesso a openpa/roles a gui custom (bootstrapitalia)
* Migliora lo script di creazione di una nuova istanza
* Corregge alcuni potenziali problemi di sicurezza xss
* Evoluzione di robots.txt per bloccare i bad crawler
* Coregge un problema nella creazione dell'oranigramma  2874
* Considera content_tag_menu nel calcolo del tree menu
* In openpa/object viene considerato il main node
* Aggiunge WhatsApp e Telegram tra i valori possibili dei contatti
* Aggiunge il codice SDI ai contatti
* Aggiunge la possibilità di escludere alberature dai menu
* Rimuovo ruolo e ruolo2 da ContentMain/AbstractIdentifiers  1940
* Aggiunge TikTok ai possibili contatti
* Aggiunge il link all'area personale ai valori inseribili nei contatti
* Corregge un errore nella funzione di template per la ricerca delle strutture
* Corregge un bug nella definizione degli handler dei blocchi
* Permette la personalizzazione dei valori head/meta da openpa/seo
* Visualizza la versione dell'installer se presente in CreditSettings/CodeVersion
* Corregge un bug in openpa/object
* Corregge la fetch per il controllo degli stati
* Permette a content_link di riconoscere se un link è al nodo o a un nodo/link esterno
* Corregge un possibile errore nel calcolo delle aree tematiche
* Corregge un typo in cookie
* Migliora la visualizzazione della versione del software
* Corregge l'id del tree menu in caso di menu virtualizzato su alberatura di tag
* Permette la configurazione di Google Recaptcha v3
* Aggiorna le configurazioni degli attributi di classe direttamente dal openpa/recaptcha
* Permette l'inserimento del codice Web Analytics Italia
* Fixed key definition name in openpaini
* Permette di gestire tramite permessi il menu trasparenza
* Merge branch 'master' into version3   Conflicts:  	bin/php/create_instance.php  	classes/openpaini.php  	design/standard/templates/openpa/seo.tpl
* Corregge un bug nel modulo usage/metrics
* Corregge un possibile errore nel salvataggio della matrice dei contatti (e introduce uno script per il fix del pregresso)
* Merge branch 'master' into version3 Corregge un possibile errore nel salvataggio della matrice dei contatti (e introduce uno script per il fix del pregresso)
* Ordina le serie nel grafico delle partecipazioni
* Merge branch 'master' into version3
* Considera l'effettiva capacità di lettura dell'utente degli oggetti correlati nella definizione di hasContent per attributi di tipo eZObjectRelationListType
* Corregge alcuni bug minori
* Nella configurazione dispatcher cluster: sostituisce l'handler local con s3_private_cache e rende i bucket configurabili separatamente
* Corregge la lingua di destinazione nel modulo per la copia dell'oggetto (openpa/add)
* Corregge una vulnerabilità xss nel nome utente
* Merge branch 'master' into version3

**[opencontent/openpa_bootstrapitalia-ls changes between 1.19.3 and 1.22.0](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.19.3...1.22.0)**
* Corregge un id duplicato in website toolbar
* Corregge un bug per cui la dashboard di moderazione privacy non imponeva lo stato corretto
* Introduce un workaround per invalidare la cache della pagina Aree riservate
* Corregge la visualizzazione mobile dei bottoni dell'header
* Nel motore di ricerca di sezione preseleziona il filtro sulla pagina corrente se presente nei filtri di ricerca
* Permette di selezionare un'alberatura di tag dalla configurazione dei blocchi
* Visualizza il limite massimo di caricamento dei file
* Corregge la visualizzazione dei filtri nel blocco contenuti remoti
* Migliora l'interfaccia di modifica dei blocchi
* Corregge la pagina di redirect dopo la creazione/modifica di un contenuto
* Corregge un bug sulla ricerca nel blocco contenuti remoti
* Introduce un sistema di visualizzazione di faq
* Corregge alcuni bug minori
* Permette la creazione/modifica di faq inline
* Aggiorna le stringhe di traduzione
* Nasconde l'icona che permette di espandere il menu una volta espanso
* Permette di configurare le varianti del tema bi per la testata
* Corregge un bug di visualizzazione dell'icona menu
* Permette di filtrare la lista dei ruoli politico/amministrativi per ruoli scaduti
* Visualizza la toolbar in tutti i moduli
* Corregge un problema di visualizzazione dei filtri nella pagina di ricerca
* Customizza la visualizzazione della card-image per la classe grafico e dataset Migliora l'interfaccia di edit del grafico
* Corregge un errore di configurazione dei blocchi
* Corregge un problema di visualizzazione dei blocchi nelle pagine trasparenza
* Aggiunge un bordo alla toolbar


## [2.1.7](https://gitlab.com/opencontent/opencity/compare/2.1.6...2.1.7) - 2021-05-30
- Typofix


#### Installer
- Add de translations to topic tree

#### Code dependencies
| Changes                               | From   | To     | Compare                                                                                  |
|---------------------------------------|--------|--------|------------------------------------------------------------------------------------------|
| opencontent/openpa_bootstrapitalia-ls | 1.18.9 | 1.19.3 | [...](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.18.9...1.19.3) |


Relevant changes by repository:

**[opencontent/openpa_bootstrapitalia-ls changes between 1.18.9 and 1.19.3](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.18.9...1.19.3)**
* Introduce un permesso custom (advanced_editor_tools) per la gestione dei permessi di accesso a funzionalità di editing avanzato
* Aggiorna la stringhe di traduzione
* Corregge un bug nella paginazione della visualizzazione dei contenuti per tag
* Rimuove il nome del file originale in ocmultibinary
* Corregge un bug di visulizzazione della lista paginata
* Corregge un bug nella ricerca filtrata dei contenuti remoti
* Recepisce la blacklist dei metadati esposti agli utenti anonimi Permette di nascondere i credits tramite configurazione ini
* Corregge la visualizzazione del logo nel footer in caso di solo logo e tagline
* Permette di virtualizzare il menu su un'alberatura di tag a tutti i livelli
* Hotfix themes!
* Corregge un bug sulla selezione dei sinonimi dei ruoli in openparole
* Corregge una vulnerabilità XSS sulla pagina di ricerca


## [2.1.6](https://gitlab.com/opencontent/opencity/compare/2.1.5...2.1.6) - 2021-05-06



#### Installer
- Update to 2.1.6 Add permission for Contenuti-obsoleti

#### Code dependencies
| Changes                               | From   | To     | Compare                                                                                  |
|---------------------------------------|--------|--------|------------------------------------------------------------------------------------------|
| opencontent/openpa_bootstrapitalia-ls | 1.18.8 | 1.18.9 | [...](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.18.8...1.18.9) |



## [2.1.5](https://gitlab.com/opencontent/opencity/compare/2.1.4...2.1.5) - 2021-05-04
- Fix changelog compare url
- Update php e nginx base images to 1.2.1 Add php env sample parameters in docker-compose


#### Installer
- show public_service/on_line_booking attribute
- Update to version 2.1.5
- Add Contenuti obsoleti default page
- show public_service/output_notes label
- require homepage name, hide home page menu link
- Add bandi_progetti date attributes in document, add concorsi state and changestate
- Update trasparenza-cct to 0.0.2
- Bugfix OpenCity Manage Restricted Area and update to 0.0.2
- Add string "demo" in demo content

#### Code dependencies
| Changes                               | From        | To          | Compare                                                                                  |
|---------------------------------------|-------------|-------------|------------------------------------------------------------------------------------------|
| aws/aws-sdk-php                       | 3.176.9     | 3.180.1     | [...](https://github.com/aws/aws-sdk-php/compare/3.176.9...3.180.1)                      |
| ezsystems/ezpublish-legacy            | 2020.1000.3 | 2020.1000.6 | [...](https://github.com/Opencontent/ezpublish-legacy/compare/2020.1000.3...2020.1000.6) |
| opencontent/ocinstaller               | e701855     | 95b1463     | [...](https://github.com/OpencontentCoop/ocinstaller/compare/e701855...95b1463)          |
| opencontent/ocopendata-ls             | 2.25.2      | 2.25.4      | [...](https://github.com/OpencontentCoop/ocopendata/compare/2.25.2...2.25.4)             |
| opencontent/ocopendata_forms-ls       | 1.6.10      | 1.6.11      | [...](https://github.com/OpencontentCoop/ocopendata_forms/compare/1.6.10...1.6.11)       |
| opencontent/openpa_bootstrapitalia-ls | 1.18.0      | 1.18.8      | [...](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.18.0...1.18.8) |
| psr/log                               | a18c1e6     | d49695b     | [...](https://github.com/php-fig/log/compare/a18c1e6...d49695b)                          |
| symfony/polyfill-ctype                | c6c942b     | 46cd957     | [...](https://github.com/symfony/polyfill-ctype/compare/c6c942b...46cd957)               |
| symfony/polyfill-intl-idn             | 3709eb8     | 780e280     | [...](https://github.com/symfony/polyfill-intl-idn/compare/3709eb8...780e280)            |
| symfony/polyfill-intl-normalizer      | 43a0283     | 8590a5f     | [...](https://github.com/symfony/polyfill-intl-normalizer/compare/43a0283...8590a5f)     |
| symfony/polyfill-mbstring             | 5232de9     | 9ad2f3c     | [...](https://github.com/symfony/polyfill-mbstring/compare/5232de9...9ad2f3c)            |
| symfony/polyfill-php72                | cc6e6f9     | 95695b8     | [...](https://github.com/symfony/polyfill-php72/compare/cc6e6f9...95695b8)               |
| symfony/polyfill-php73                | a678b42     | fba8933     | [...](https://github.com/symfony/polyfill-php73/compare/a678b42...fba8933)               |
| symfony/polyfill-php80                | dc3063b     | eca0bf4     | [...](https://github.com/symfony/polyfill-php80/compare/dc3063b...eca0bf4)               |


Relevant changes by repository:

**[opencontent/ocinstaller changes between e701855 and 95b1463](https://github.com/OpencontentCoop/ocinstaller/compare/e701855...95b1463)**
* Add load_policies param in role step (se false to avoid role regeneration)
* avoid warning in IOTools

**[opencontent/ocopendata-ls changes between 2.25.2 and 2.25.4](https://github.com/OpencontentCoop/ocopendata/compare/2.25.2...2.25.4)**
* Evita un possibile errore nel calcolo della paginazione a cursore
* Force la rigenerazione delle cache delle classi per evitare un fatal error

**[opencontent/ocopendata_forms-ls changes between 1.6.10 and 1.6.11](https://github.com/OpencontentCoop/ocopendata_forms/compare/1.6.10...1.6.11)**
* Corregge il valore di default del campo BooleanField in accordo con i parametri dell'attributo di classe

**[opencontent/openpa_bootstrapitalia-ls changes between 1.18.0 and 1.18.8](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.18.0...1.18.8)**
* Corregge un problema di invio nel connettore della dashboard con una mailing list
* Corregge la visualizzazione dei giorni di chiusura negli orari
* Migliora la visualizzazione delle aree riservate
* Typo fix
* Modifica il link con ancora  page-content
* Migliora la visualizzazione delle dashboard Consente l'invio di mailing list per lingua
* Inserisce la traduzione mancante di "Leggi di più"
* Corregge un bug per cui le tipologie di contatto nei punti di contatto non erano correttamente modificabili
* Corregge un bug per cui  i contenuti nei blocchi non venivano filtrati correttamente per stato
* Visualizza i tipi di contatto disponibili a partire dal vocabolario dedicato
* Introduce il gruppo di attributi Bandi/Progetti
* Introduce un cron per eseguire le importazioni forzando il token di protezione
* Corregge un bug di traduzione nel template public service


## [2.1.4](https://gitlab.com/opencontent/opencity/compare/2.1.3...2.1.4) - 2021-04-07
- Reduce cache s-maxage Add some security fixes
- Activate ezformtoken extension
- Avoid conflicts in abstract settings
- Update RicercaDocumenti attributes and OpendataRemoteContents views in block.ini
- Update php and nginx base image


#### Installer
- add Manage Restricted Area installer module
- Update version to 2.1.4
- Add new Tipi-di-luogo tags
- Fix user/preferences policy assignment in Editor role
- Show show_topic_children as default in topic (topics-tree version)
- Show dichiarazioni_patrimoniali_soggetto, dichiarazioni_patrimoniali_parenti in politico class extra
- Add constraint in homepage/link_al_menu_orizzontale
- Fix employee class removing is_container
- Update de class translations

#### Code dependencies
| Changes                               | From     | To      | Compare                                                                                 |
|---------------------------------------|----------|---------|-----------------------------------------------------------------------------------------|
| aws/aws-sdk-php                       | 3.173.22 | 3.176.9 | [...](https://github.com/aws/aws-sdk-php/compare/3.173.22...3.176.9)                    |
| easyrdf/easyrdf                       | c7b0a9d  | 12bd03d | [...](https://github.com/easyrdf/easyrdf/compare/c7b0a9d...12bd03d)                     |
| opencontent/ezpostgresqlcluster-ls    | f37c194  | ef754ff | [...](https://github.com/Opencontent/ezpostgresqlcluster/compare/f37c194...ef754ff)     |
| opencontent/ocbootstrap-ls            | 1.10.3   | 1.10.5  | [...](https://github.com/OpencontentCoop/ocbootstrap/compare/1.10.3...1.10.5)           |
| opencontent/occsvimport-ls            | 2.5.0    | 2.5.2   | [...](https://github.com/OpencontentCoop/occsvimport/compare/2.5.0...2.5.2)             |
| opencontent/occustomfind-ls           | 2.2.1    | 2.2.3   | [...](https://github.com/OpencontentCoop/occustomfind/compare/2.2.1...2.2.3)            |
| opencontent/oceditorialstuff-ls       | 2.5.0    | 2.5.1   | [...](https://github.com/OpencontentCoop/oceditorialstuff/compare/2.5.0...2.5.1)        |
| opencontent/ocevents-ls               | 1.1.9    | 1.1.10  | [...](https://github.com/OpencontentCoop/ocevents/compare/1.1.9...1.1.10)               |
| opencontent/oci18n                    | 0f8551d  | 07816bd | [...](https://github.com/OpencontentCoop/oci18n/compare/0f8551d...07816bd)              |
| opencontent/ocinstaller               | 955144f  | e701855 | [...](https://github.com/OpencontentCoop/ocinstaller/compare/955144f...e701855)         |
| opencontent/ocmultibinary-ls          | 2.3.0    | 2.3.1   | [...](https://github.com/OpencontentCoop/ocmultibinary/compare/2.3.0...2.3.1)           |
| opencontent/ocopenapi-ls              | 1.3.5    | 1.3.8   | [...](https://github.com/OpencontentCoop/ocopenapi-ls/compare/1.3.5...1.3.8)            |
| opencontent/ocopendata-ls             | 2.25.1   | 2.25.2  | [...](https://github.com/OpencontentCoop/ocopendata/compare/2.25.1...2.25.2)            |
| opencontent/ocsearchtools-ls          | 1.11.0   | 1.11.1  | [...](https://github.com/OpencontentCoop/ocsearchtools/compare/1.11.0...1.11.1)         |
| opencontent/openpa_bootstrapitalia-ls | 1.4.9    | 1.18.0  | [...](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.4.9...1.18.0) |
| symfony/cache-contracts               | 648977a  | c044646 | [...](https://github.com/symfony/cache-contracts/compare/648977a...c044646)             |
| symfony/deprecation-contracts         | 49dc45a  | 5f38c88 | [...](https://github.com/symfony/deprecation-contracts/compare/49dc45a...5f38c88)       |
| symfony/event-dispatcher-contracts    | 9b7cabf  | 69fee1a | [...](https://github.com/symfony/event-dispatcher-contracts/compare/9b7cabf...69fee1a)  |
| symfony/service-contracts             | e830e6c  | f040a30 | [...](https://github.com/symfony/service-contracts/compare/e830e6c...f040a30)           |
| zetacomponents/persistent-object      | 1.8      | 1.8.1   | [...](https://github.com/zetacomponents/PersistentObject/compare/1.8...1.8.1)           |


Relevant changes by repository:

**[opencontent/ezpostgresqlcluster-ls changes between f37c194 and ef754ff](https://github.com/Opencontent/ezpostgresqlcluster/compare/f37c194...ef754ff)**
* Add static method storeClusterizedFileMetadata for migrations

**[opencontent/ocbootstrap-ls changes between 1.10.3 and 1.10.5](https://github.com/OpencontentCoop/ocbootstrap/compare/1.10.3...1.10.5)**
* Aggiorna le traduzioni delle stringhe
* Protegge con CSRF token la chiamata post ajax di ocevents

**[opencontent/occsvimport-ls changes between 2.5.0 and 2.5.2](https://github.com/OpencontentCoop/occsvimport/compare/2.5.0...2.5.2)**
* Cambia il metodo di parsing del foglio di google evitando di usare l'url csv
* Corregge l'import di ezdate per le versioni di ez che utilizzano eZTimestamp::getUtcTimestampFromLocalTimestamp

**[opencontent/occustomfind-ls changes between 2.2.1 and 2.2.3](https://github.com/OpencontentCoop/occustomfind/compare/2.2.1...2.2.3)**
* Make dataset reindexable
* Avoid reindex error

**[opencontent/oceditorialstuff-ls changes between 2.5.0 and 2.5.1](https://github.com/OpencontentCoop/oceditorialstuff/compare/2.5.0...2.5.1)**
* Visualizza la traduzione inserita in cronologia versioni

**[opencontent/ocevents-ls changes between 1.1.9 and 1.1.10](https://github.com/OpencontentCoop/ocevents/compare/1.1.9...1.1.10)**
* Inserisce il token csrf nella chiamata post ajax

**[opencontent/oci18n changes between 0f8551d and 07816bd](https://github.com/OpencontentCoop/oci18n/compare/0f8551d...07816bd)**
* Add classes and tag csv import export tools
* Fix language parser in update installer

**[opencontent/ocinstaller changes between 955144f and e701855](https://github.com/OpencontentCoop/ocinstaller/compare/955144f...e701855)**
* Fix pagination in DepracateTopic
* Move node before remove location avoiding block inconsistency
* Add rename_tag step
* Fix rename_tag step

**[opencontent/ocmultibinary-ls changes between 2.3.0 and 2.3.1](https://github.com/OpencontentCoop/ocmultibinary/compare/2.3.0...2.3.1)**
* Add CSRF token in ajax post

**[opencontent/ocopenapi-ls changes between 1.3.5 and 1.3.8](https://github.com/OpencontentCoop/ocopenapi-ls/compare/1.3.5...1.3.8)**
* Avoid misalignment of remote ids
* Avoid fatal error in schema generation
* Avoid conflict in HTTPLocaleCode

**[opencontent/ocopendata-ls changes between 2.25.1 and 2.25.2](https://github.com/OpencontentCoop/ocopendata/compare/2.25.1...2.25.2)**
* Permette di specificate le preferenze di lingua in TagRepository

**[opencontent/ocsearchtools-ls changes between 1.11.0 and 1.11.1](https://github.com/OpencontentCoop/ocsearchtools/compare/1.11.0...1.11.1)**
* Evita un errore nella sincronizzazione dei gruppi di classe

**[opencontent/openpa_bootstrapitalia-ls changes between 1.4.9 and 1.18.0](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.4.9...1.18.0)**
* Considera anche il campo Documento allegati come possibile elemento obbligatorio della classe Documento, oltre a Link e File
* Corregge un problema sulla validazione degli allegati nel documento
* Abilita le traduzioni nelle dashboard
* Permette di personalizzare la paginazione dei membri di un organo politico Permette di personalizzare il nome di un ruolo
* Imposta la configurazione di override dei template per visualizzare una matrice come elenco di link
* Corregge una vulnerabilità xss nella pagina di ricerca
* Corregge una vulnerabilità di tipo user enumeration nel modulo di recupero password
* Premette l'abilitazione/disabilitazione di un utente da interfaccia di frontend
* Corregge un bug nel modulo user/setting
* Introduce una vista datatable (in versione beta) per il blocco contenuti remoti
* Corregge alcuni problemi di accessibilità WCAG 2.1 AA
* Merge branch 'fix-wave'
* Migliora l'utilizzo dell'interfaccia in modalità multilingua
* Introduce un'interfaccia per la gestione dei tipi di ruolo (beta)
* Visualizza le traduzioni disponibili nell'interfaccia di modifica relazioni
* Migliora la visualizzazione del menu trasparenza
* Consente di specificare i ruoli da visualizzare in contenuti con attributi openparole
* wip dashboard mail
* Migliora il blocco ricerca documenti introducendo il filtro per anno, la possibilità di nascondere la data di fine pubblicazione e la possibilità di mostrare solo i contenuti in pubblicazione
* Corregge un bug sul blocco calendario per cui non veniva considerato il filtro per argomento
* Corregge la visualizzazione datatable del blocco contenuti remoti


## [2.1.3](https://gitlab.com/opencontent/opencity/compare/2.1.2...2.1.3) - 2021-03-05
- Bump installer version
- Reparent old topic in topic-tree installer
- Add explicit entrypoint in docker-compose
- Updated README
- Add minio traefik label


#### Installer
- Add new topic-tree installer
- Update trasparenza installer version to 0.0.9
- Add public_service/average_processing_time and output_notes in class extra
- Show online_contact_point/note in card_small_view
- Add article/related_service class extra and hide first group label
- fix public_service fields placements
- Bugfix in demo installer

#### Code dependencies
| Changes                               | From        | To          | Compare                                                                                  |
|---------------------------------------|-------------|-------------|------------------------------------------------------------------------------------------|
| aws/aws-sdk-php                       | 3.171.18    | 3.173.22    | [...](https://github.com/aws/aws-sdk-php/compare/3.171.18...3.173.22)                    |
| ezsystems/ezmultiupload-ls            | v5.3.1.2    | v5.3.1.3    | [...](https://github.com/ezsystems/ezmultiupload/compare/v5.3.1.2...v5.3.1.3)            |
| ezsystems/ezpublish-legacy            | 2020.1000.1 | 2020.1000.3 | [...](https://github.com/Opencontent/ezpublish-legacy/compare/2020.1000.1...2020.1000.3) |
| opencontent/cjwnewsletter-ls          | 3.0.4       | 3.0.5       | [...](https://github.com/Opencontent/cjw_newsletter/compare/3.0.4...3.0.5)               |
| opencontent/ocbootstrap-ls            | 1.10.2      | 1.10.3      | [...](https://github.com/OpencontentCoop/ocbootstrap/compare/1.10.2...1.10.3)            |
| opencontent/occodicefiscale-ls        | 2d040a8     | 24253b0     | [...](https://github.com/OpencontentCoop/occodicefiscale/compare/2d040a8...24253b0)      |
| opencontent/occsvimport-ls            | 2.4.1       | 2.5.0       | [...](https://github.com/OpencontentCoop/occsvimport/compare/2.4.1...2.5.0)              |
| opencontent/ocinstaller               | 306ea1c     | 955144f     | [...](https://github.com/OpencontentCoop/ocinstaller/compare/306ea1c...955144f)          |
| opencontent/ocopenapi-ls              | 1.3.3       | 1.3.5       | [...](https://github.com/OpencontentCoop/ocopenapi-ls/compare/1.3.3...1.3.5)             |
| opencontent/ocopendata-ls             | 2.25.0      | 2.25.1      | [...](https://github.com/OpencontentCoop/ocopendata/compare/2.25.0...2.25.1)             |
| opencontent/ocopendata_forms-ls       | 1.6.9       | 1.6.10      | [...](https://github.com/OpencontentCoop/ocopendata_forms/compare/1.6.9...1.6.10)        |
| opencontent/ocrecaptcha-ls            | 1.4         | 1.5         | [...](https://github.com/OpencontentCoop/ocrecaptcha/compare/1.4...1.5)                  |
| opencontent/ocsearchtools-ls          | 1.10.9      | 1.11.0      | [...](https://github.com/OpencontentCoop/ocsearchtools/compare/1.10.9...1.11.0)          |
| opencontent/ocsupport-ls              | 2ee7846     | 8071c61     | [...](https://github.com/OpencontentCoop/ocsupport/compare/2ee7846...8071c61)            |
| opencontent/ocwebhookserver-ls        | aabd35a     | a60d571     | [...](https://github.com/OpencontentCoop/ocwebhookserver/compare/aabd35a...a60d571)      |
| opencontent/openpa-ls                 | 3.12.1      | c68a756     | [...](https://github.com/OpencontentCoop/openpa/compare/3.12.1...c68a756)                |
| opencontent/openpa_bootstrapitalia-ls | 1.3.2       | 1.4.9       | [...](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.3.2...1.4.9)   |
| opencontent/openpa_userprofile-ls     | 4c7a67e     | 3998da2     | [...](https://github.com/OpencontentCoop/openpa_userprofile/compare/4c7a67e...3998da2)   |
| php-http/guzzle6-adapter              | 6f108cf     | 9d1a45e     | [...](https://github.com/php-http/guzzle6-adapter/compare/6f108cf...9d1a45e)             |
| php-http/message                      | d23ac28     | 1.11.0      | [...](https://github.com/php-http/message/compare/d23ac28...1.11.0)                      |
| psr/log                               | dd738d0     | a18c1e6     | [...](https://github.com/php-fig/log/compare/dd738d0...a18c1e6)                          |
| symfony/cache-contracts               | 49a0e7a     | 648977a     | [...](https://github.com/symfony/cache-contracts/compare/49a0e7a...648977a)              |
| symfony/deprecation-contracts         | d940483     | 49dc45a     | [...](https://github.com/symfony/deprecation-contracts/compare/d940483...49dc45a)        |
| symfony/event-dispatcher-contracts    | 5e8ae4d     | 9b7cabf     | [...](https://github.com/symfony/event-dispatcher-contracts/compare/5e8ae4d...9b7cabf)   |
| symfony/polyfill-intl-idn             | 0eb8293     | 3709eb8     | [...](https://github.com/symfony/polyfill-intl-idn/compare/0eb8293...3709eb8)            |
| symfony/polyfill-intl-normalizer      | 6e971c8     | 43a0283     | [...](https://github.com/symfony/polyfill-intl-normalizer/compare/6e971c8...43a0283)     |
| symfony/polyfill-mbstring             | f377a3d     | 5232de9     | [...](https://github.com/symfony/polyfill-mbstring/compare/f377a3d...5232de9)            |
| symfony/service-contracts             | 90388a3     | e830e6c     | [...](https://github.com/symfony/service-contracts/compare/90388a3...e830e6c)            |


Relevant changes by repository:

**[opencontent/cjwnewsletter-ls changes between 3.0.4 and 3.0.5](https://github.com/Opencontent/cjw_newsletter/compare/3.0.4...3.0.5)**
* Fix typo in translation

**[opencontent/ocbootstrap-ls changes between 1.10.2 and 1.10.3](https://github.com/OpencontentCoop/ocbootstrap/compare/1.10.2...1.10.3)**
* Corregge una vulnerabilità XSS

**[opencontent/occodicefiscale-ls changes between 2d040a8 and 24253b0](https://github.com/OpencontentCoop/occodicefiscale/compare/2d040a8...24253b0)**
* Corregge un bug nel connettore di ocdescriptionboolean
* Aggiunge la validazione del codice fiscale nel connettore opendata

**[opencontent/occsvimport-ls changes between 2.4.1 and 2.5.0](https://github.com/OpencontentCoop/occsvimport/compare/2.4.1...2.5.0)**
* Permette l'inserimento di eztags come stringhe semplici Espone gli errori di import in Progression notes Corregge il parsing del csv
* Permette di specificare la lingua di importazione

**[opencontent/ocinstaller changes between 306ea1c and 955144f](https://github.com/OpencontentCoop/ocinstaller/compare/306ea1c...955144f)**
* Add deprecate_topic installer step
* Allow deprecate topic without replacement
* Avoid error in DeprecateTopic installer

**[opencontent/ocopenapi-ls changes between 1.3.3 and 1.3.5](https://github.com/OpencontentCoop/ocopenapi-ls/compare/1.3.3...1.3.5)**
* Minor bugfix
* Allow multi classAttributeId in RelationsEndpointFactory
* Allow multi classAttributeId in RelationsEndpointFactory

**[opencontent/ocopendata-ls changes between 2.25.0 and 2.25.1](https://github.com/OpencontentCoop/ocopendata/compare/2.25.0...2.25.1)**
* Corregge un bug nella validazione api delle relazioni

**[opencontent/ocopendata_forms-ls changes between 1.6.9 and 1.6.10](https://github.com/OpencontentCoop/ocopendata_forms/compare/1.6.9...1.6.10)**
* Corregge alcuni bug minori
* Corregge un bug nella ricerca del punto sulla mappa nel contesto di un form dinamico

**[opencontent/ocrecaptcha-ls changes between 1.4 and 1.5](https://github.com/OpencontentCoop/ocrecaptcha/compare/1.4...1.5)**
* Verifica la presenza del valore post in validateObjectAttributeHTTPInput
* Verifica la presenza del valore post in validateCollectionAttributeHTTPInput
* Disabilita il connettore recaptcha se l'utente corrente è autenticato

**[opencontent/ocsearchtools-ls changes between 1.10.9 and 1.11.0](https://github.com/OpencontentCoop/ocsearchtools/compare/1.10.9...1.11.0)**
* Rimuove di default le cache calendartaxonomy e calendarquery che vanno attivate qualora di utilizzino le funzionalità

**[opencontent/ocsupport-ls changes between 2ee7846 and 8071c61](https://github.com/OpencontentCoop/ocsupport/compare/2ee7846...8071c61)**
* Add changelog tools
* changelog bugfixes
* Fix tag listing tool
* Bugifx in tag list

**[opencontent/ocwebhookserver-ls changes between aabd35a and a60d571](https://github.com/OpencontentCoop/ocwebhookserver/compare/aabd35a...a60d571)**
* Allow payload customizations via trigger configuration
* Fix custom payload check in webhook edit

**[opencontent/openpa-ls changes between 3.12.1 and c68a756](https://github.com/OpencontentCoop/openpa/compare/3.12.1...c68a756)**
* Add redis cluster connector verbose logs
* Minor bugfix

**[opencontent/openpa_bootstrapitalia-ls changes between 1.3.2 and 1.4.9](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.3.2...1.4.9)**
* Corregge un problema di visualizzazione in ricerca documenti
* Corregge un bug nella pagina trasparenza
* Corregge un errore grave nella logica di visualizzazione della pagina trasparenza
* Corregge una vulnerabilità XSS
* Corregge un bug nella paginazione della dashboard Segnalazioni degli utenti
* Introduce la paginazione per le Persone che compongono la struttura Corregge alcuni bug di configurazione
* Permette di escludere l'immagine principale dalla visualizzazione full
* Corregge un bug per cui non veniva visualizzata l'immagine principale nella galleria in caso di opzione attivata Mostra solo galleria
* Aggiunge l'indice extra geo per office public_organization public_service administrative_area
* Permette la ricerca con gli apici doppi nel blocco contenuti remoti
* Corregge un problema del tema mediterraneo
* Introduce la funzionalità delle dashboard remote (beta)
* Corregge un bug al connettore remote dashboard import
* Permette di rendere il menu laterale navigabile (da configurazione ini)
* Corregge un bug di visualizzazione di Chrome nell'immagine del blocco singolo di default
* Corregge il blocco contenuti remoti nel caso si visualizzino contenuti locali con un prefisso di siteaccess
* Migliora l'usabilità del selettore delle lingue
* Permette di nascondere l'etichetta di un gruppo di attributi
* Merge branch 'feature-lang-switcher'
* Aumenta l'abstract visualizzato in banner a 160 caratteri
* Permette di eseguire una ricerca nel contesto content/browse
* Considera la tipologia di configurazione di accesso host_uri nel selettore delle lingue
* Mostra gli argomenti figli sotto alla descrizione dell'argomento (controllato da show_topic_children) Mostra la descrizione dell'argomento a tutto ingombro se non sono presenti aree o organi politici relazionati Controlla la visibilità degli argomenti in caso di argomenti non accessibili all'anonimo Imposta il boost del topic nel motore di ricerca
* Nasconde gli argomenti deprecati dal menu
* Nasconde gli argomenti deprecati dal blocco argomenti

**[opencontent/openpa_userprofile-ls changes between 4c7a67e and 3998da2](https://github.com/OpencontentCoop/openpa_userprofile/compare/4c7a67e...3998da2)**
* Corregge una vulnerabilità XSS


## [2.1.2](https://gitlab.com/opencontent/opencity/compare/2.1.1...2.1.2) - 2021-01-15

#### Installer
- Update version to 2.1.2
- Fix Modulistica layout
- Add edit class trasparenza in Editor trasparenza
- Add create folder in banner in Editor base role
- Fix topic card_small_view extra
- Fix politico extra
- Add banner/topics field
- Show label office/people
- Add OpenCity Trasparenza CCT installer

#### Code dependencies
| Changes                               | From    | To       | Compare                                                                                |
|---------------------------------------|:--------|:---------|:---------------------------------------------------------------------------------------|
| aws/aws-sdk-php                       | 3.168.0 | 3.171.18 | [...](https://github.com/aws/aws-sdk-php/compare/3.168.0...3.171.18)                   |
| opencontent/occodicefiscale-ls        | daac5a8 | 2d040a8  | [...](https://github.com/OpencontentCoop/occodicefiscale/compare/daac5a8...2d040a8)    |
| opencontent/occustomfind-ls           | 2.2.0   | 2.2.1    | [...](https://github.com/OpencontentCoop/occustomfind/compare/2.2.0...2.2.1)           |
| opencontent/ocembed-ls                | 1.4.1   | 1.4.2    | [...](https://github.com/OpencontentCoop/ocembed/compare/1.4.1...1.4.2)                |
| opencontent/ocfoshttpcache-ls         | faa918c | 5ab0d91  | [...](https://github.com/OpencontentCoop/ocfoshttpcache/compare/faa918c...5ab0d91)     |
| opencontent/ocinstaller               | 7a4ec2b | 306ea1c  | [...](https://github.com/OpencontentCoop/ocinstaller/compare/7a4ec2b...306ea1c)        |
| opencontent/ocmultibinary-ls          | 2.2.5   | 2.3.0    | [...](https://github.com/OpencontentCoop/ocmultibinary/compare/2.2.5...2.3.0)          |
| opencontent/ocopendata-ls             | 2.24.7  | 2.25.0   | [...](https://github.com/OpencontentCoop/ocopendata/compare/2.24.7...2.25.0)           |
| opencontent/ocopendata_forms-ls       | 1.6.8   | 1.6.9    | [...](https://github.com/OpencontentCoop/ocopendata_forms/compare/1.6.8...1.6.9)       |
| opencontent/openpa-ls                 | 3.12.0  | 3.12.1   | [...](https://github.com/OpencontentCoop/openpa/compare/3.12.0...3.12.1)               |
| opencontent/openpa_bootstrapitalia-ls | 1.2.1   | 1.3.2    | [...](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.2.1...1.3.2) |
| php-http/message                      | 6e2c574 | d23ac28  | [...](https://github.com/php-http/message/compare/6e2c574...d23ac28)                   |
| symfony/polyfill-ctype                | fade6de | c6c942b  | [...](https://github.com/symfony/polyfill-ctype/compare/fade6de...c6c942b)             |
| symfony/polyfill-intl-idn             | 4c489fd | 0eb8293  | [...](https://github.com/symfony/polyfill-intl-idn/compare/4c489fd...0eb8293)          |
| symfony/polyfill-intl-normalizer      | 69609f9 | 6e971c8  | [...](https://github.com/symfony/polyfill-intl-normalizer/compare/69609f9...6e971c8)   |
| symfony/polyfill-mbstring             | 401c9d9 | f377a3d  | [...](https://github.com/symfony/polyfill-mbstring/compare/401c9d9...f377a3d)          |
| symfony/polyfill-php72                | 4a4465f | cc6e6f9  | [...](https://github.com/symfony/polyfill-php72/compare/4a4465f...cc6e6f9)             |
| symfony/polyfill-php73                | 8c0d39c | a678b42  | [...](https://github.com/symfony/polyfill-php73/compare/8c0d39c...a678b42)             |
| symfony/polyfill-php80                | 3a11f3d | dc3063b  | [...](https://github.com/symfony/polyfill-php80/compare/3a11f3d...dc3063b)             |

Relevant changes by repository:

**[opencontent/occodicefiscale-ls changes between daac5a8 and 2d040a8](https://github.com/OpencontentCoop/occodicefiscale/compare/daac5a8...2d040a8)**
* Espone i datatype in ocopendata_forms

**[opencontent/occustomfind-ls changes between 2.2.0 and 2.2.1](https://github.com/OpencontentCoop/occustomfind/compare/2.2.0...2.2.1)**
* Fix pending items runner

**[opencontent/ocembed-ls changes between 1.4.1 and 1.4.2](https://github.com/OpencontentCoop/ocembed/compare/1.4.1...1.4.2)**
* Evita la richiesta justcheckurl per workaround a problema youtube

**[opencontent/ocfoshttpcache-ls changes between faa918c and 5ab0d91](https://github.com/OpencontentCoop/ocfoshttpcache/compare/faa918c...5ab0d91)**
* Minor bugfix

**[opencontent/ocinstaller changes between 7a4ec2b and 306ea1c](https://github.com/OpencontentCoop/ocinstaller/compare/7a4ec2b...306ea1c)**
* Minor fixes

**[opencontent/ocmultibinary-ls changes between 2.2.5 and 2.3.0](https://github.com/OpencontentCoop/ocmultibinary/compare/2.2.5...2.3.0)**
* Allow to clear all files in fromString method

**[opencontent/ocopendata-ls changes between 2.24.7 and 2.25.0](https://github.com/OpencontentCoop/ocopendata/compare/2.24.7...2.25.0)**
* Permette di bypassare le policy di creazione/aggiornamento in api content repository

**[opencontent/ocopendata_forms-ls changes between 1.6.8 and 1.6.9](https://github.com/OpencontentCoop/ocopendata_forms/compare/1.6.8...1.6.9)**
* Impedisce l'invio del form alla pressione del tasto invio solo nell'ambito di alpaca-form

**[opencontent/openpa-ls changes between 3.12.0 and 3.12.1](https://github.com/OpencontentCoop/openpa/compare/3.12.0...3.12.1)**
* Aggiunge il protocollo (https per default) in aws dfs public handler

**[opencontent/openpa_bootstrapitalia-ls changes between 1.2.1 and 1.3.2](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.2.1...1.3.2)**
* Corregge un problema che si potrebbe verificare nella reindicizzazione delle persone in creazione/aggiornamento ruoli
* Corregge un bug di visualizzazione nel blocco Ricerca documenti
* Introduce un nuovo datatype per poter decorare automaticamente una stringa
* aggiunto nuovo tema Mediterraneo
* aggiunto nuovo tema Mediterraneo
* Merge pull request #8 from OpencontentCoop/new_verde_theme  aggiunto nuovo tema Mediterraneo
* Inverte l'ordine degli attributi managed_by* nella visualizzazione full del topic
* Aggiunge la categoria di attributo Concorsi
* Corregge un bug sulla visualizzazione di default del topic
* Disattiva di default la sincronizzazione della trasparenza
* Redesign del blocco singolo (conforme a template bootstrapitalia)
* Rimuove il nome file dalla visualizzazione di ezbinaryfile
* Migliora il blocco ricerca_documento introducendo il filtro per argomenti
* Semplifica le regole di visualizzazione delle pagina trasparenza
* Permette di ricercare in tutto il sito i contenuti da relazionare nell'interfaccia ajax
* Evidenza gli argomenti che hanno elementi figli nell'interfaccia di edit
* Migliora la visualizzazione dei ruoli
* Corregge alcuni bug minori

## [2.1.1](https://gitlab.com/opencontent/opencity/compare/2.1.0...2.1.1) - 2020-12-09
- Add smart view cache for time_indexed_role
- Add place dashboard

#### Installer
- Update to version 2.1.1
- Make the role field searchable in employee and politico
- Hide public_service/has_channel label
- Show politico/alt_name in card_small_view
- Avoid duplicate document/reference_doc
- Add related_news to politico
- Add private_organization/description in overview
- Fix article/dead_line label

#### Code dependencies
| Changes                               | From    | To      | Compare                                                                                |
|---------------------------------------|:--------|:--------|:---------------------------------------------------------------------------------------|
| aws/aws-sdk-php                       | 3.161.1 | 3.168.0 | [...](https://github.com/aws/aws-sdk-php/compare/3.161.1...3.168.0)                    |
| easyrdf/easyrdf                       | b68a502 | c7b0a9d | [...](https://github.com/easyrdf/easyrdf/compare/b68a502...c7b0a9d)                    |
| friendsofsymfony/http-cache           | 42c96a0 | fa9abf6 | [...](https://github.com/FriendsOfSymfony/FOSHttpCache/compare/42c96a0...fa9abf6)      |
| opencontent/occustomfind-ls           | 2.1.2   | 2.2.0   | [...](https://github.com/OpencontentCoop/occustomfind/compare/2.1.2...2.2.0)           |
| opencontent/ocmultibinary-ls          | 2.2.4   | 2.2.5   | [...](https://github.com/OpencontentCoop/ocmultibinary/compare/2.2.4...2.2.5)          |
| opencontent/ocopenapi-ls              | 1.3.2   | 1.3.3   | [...](https://github.com/OpencontentCoop/ocopenapi-ls/compare/1.3.2...1.3.3)           |
| opencontent/ocopendata-ls             | 2.24.4  | 2.24.7  | [...](https://github.com/OpencontentCoop/ocopendata/compare/2.24.4...2.24.7)           |
| opencontent/ocopendata_forms-ls       | 1.6.7   | 1.6.8   | [...](https://github.com/OpencontentCoop/ocopendata_forms/compare/1.6.7...1.6.8)       |
| opencontent/openpa-ls                 | 3.11.1  | 3.12.0  | [...](https://github.com/OpencontentCoop/openpa/compare/3.11.1...3.12.0)               |
| opencontent/openpa_bootstrapitalia-ls | 1.1.2   | 1.2.0   | [...](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.1.2...1.2.0) |
| php-http/discovery                    | 1.12.0  | 1.13.0  | [...](https://github.com/php-http/discovery/compare/1.12.0...1.13.0)                   |
| php-http/message                      | 39db36d | 6e2c574 | [...](https://github.com/php-http/message/compare/39db36d...6e2c574)                   |

Relevant changes by repository:

**[opencontent/occustomfind-ls changes between 2.1.2 and 2.2.0](https://github.com/OpencontentCoop/occustomfind/compare/2.1.2...2.2.0)**
 * Handle async import

**[opencontent/ocmultibinary-ls changes between 2.2.4 and 2.2.5](https://github.com/OpencontentCoop/ocmultibinary/compare/2.2.4...2.2.5)**
 * Add ini setting to configure allowed file extension per attribute

**[opencontent/ocopenapi-ls changes between 1.3.2 and 1.3.3](https://github.com/OpencontentCoop/ocopenapi-ls/compare/1.3.2...1.3.3)**
 * Fix bug in uri generation
 * fix typo

**[opencontent/ocopendata-ls changes between 2.24.4 and 2.24.7](https://github.com/OpencontentCoop/ocopendata/compare/2.24.4...2.24.7)**
 * Corregge un bug che si verificava nella pubblicazione di contenuti in installazioni multilingua
 * Mantiene la stessa dimensione dell'array di risposta nelle richieste select-fields anche se manca la traduzione nella lingua corrente
 * opendataTools i18n visualizza la prima traduzione esistente qualora non esistesse nella lingua corrente né nella lingua di fallback
 * opendataTools corregge un bug sul metodo i18n

**[opencontent/ocopendata_forms-ls changes between 1.6.7 and 1.6.8](https://github.com/OpencontentCoop/ocopendata_forms/compare/1.6.7...1.6.8)**
 * Permette di tradurre di un contenuto qualora si tenti di modificarlo in una lingua non ancora presente

**[opencontent/openpa-ls changes between 3.11.1 and 3.12.0](https://github.com/OpencontentCoop/openpa/compare/3.11.1...3.12.0)**
 * Permette l'inserimento del codice Web Analytics Italia

**[opencontent/openpa_bootstrapitalia-ls changes between 1.1.2 and 1.2.0](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.1.2...1.2.0)**
 * Corregge la configurazione dei generatori di dataset
 * Corregge il meccanismo di moderazione per cui tutti i contenuti previsti dalle dashboard venivano sempre messi in moderazione
 * Corregge la visualizzazione delle date in apertura nelle card
 * Corregge un problema di digitazione
 * Corregge la dimensione del testo del contenuto introduttivo della dashboard di collaborazione
 * Corregge alcuni problemi che si verificavano in un'installazione multilingua
 * Corregge la visualizzazione banner color di default
 * Rimuove il bordo scuro dal box card_teaser
 * Visualizza l'assessore di rifermento in topic
 * Corregge un bug sulla ricerca ruoli negli attributi di tipo Ruolo
 * Aumenta il ranking dei contenuti di tipo pagina_sito e frontpage
 * Corregge un bug sul filtro di visualizzazione dei ruoli
 * Invia una notifica all'utente o al gruppo configurato in caso di registrazione dal modulo join
 * Permette di rimuovere/editare un link dentro una pagina trasparenza
 * Aggiunge un nuovo tema per apss
 * Merge pull request #7 from OpencontentCoop/new-color-apss  Aggiunge un nuovo tema per apss
 * Nel servizio pubblico, nasconde il titolo del canale digitale se ne è correlato solo uno
 * Corregge la visualizzazione della dashboard Gestione contenuti e imposta la dashboard di default per i luoghi
 * Visualizza il link in channel come bottone
 * Migliora la visualizzazione del blocco ricerca documenti
 * Rende indicizzabili gli attributi di tipo Ruolo OpenPA per gli oggetti riferiti all’attributo person
 * Reindicizza le persone quando ne si aggiornano i ruoli
 * Permette il tracciamento da parte di webanalytics.italia.it


## [2.1.0](https://gitlab.com/opencontent/opencity/compare/2.0.19...2.1.0) - 2020-11-16
- Fix some ini settings
- Activate extension occustomfind

#### Installer
- Update to version 2.1.0
- Update trasparenza to version 0.0.8
- Add some missing content icons
- Add valuation/dashboard permission to Editor-Base role
- Fix valuation strings (add valuation installer module)
- Fix some bugs
- Add Tipo di documento tagtree
- Add valuation default object
- Fix change section settings for document
- Check ezcontentobject.published and ezcontentobject.modified column type
- Add Tag installer lite version

#### Code dependencies
| Changes                               | From      | To      | Compare                                                                                 |
|---------------------------------------|:----------|:--------|:----------------------------------------------------------------------------------------|
| aws/aws-sdk-php                       | 3.158.8   | 3.161.1 | [...](https://github.com/aws/aws-sdk-php/compare/3.158.8...3.161.1)                     |
| easyrdf/easyrdf                       | a984ecb   | b68a502 | [...](https://github.com/easyrdf/easyrdf/compare/a984ecb...b68a502)                     |
| maxh/php-nominatim                    | 311363b   | 44161dc | [...](https://github.com/maxhelias/php-nominatim/compare/311363b...44161dc)             |
| opencontent/occsvimport-ls            | 2.4.0     | 2.4.1   | [...](https://github.com/OpencontentCoop/occsvimport/compare/2.4.0...2.4.1)             |
| opencontent/occustomfind-ls           | 1.0       | 2.1.2   | [...](https://github.com/OpencontentCoop/occustomfind/compare/1.0...2.1.2)              |
| opencontent/oceditorialstuff-ls       | 2.4.2     | 2.5.0   | [...](https://github.com/OpencontentCoop/oceditorialstuff/compare/2.4.2...2.5.0)        |
| opencontent/ocinstaller               | 35c8665   | 7a4ec2b | [...](https://github.com/OpencontentCoop/ocinstaller/compare/35c8665...7a4ec2b)         |
| opencontent/ocmultibinary-ls          | 2.2.2     | 2.2.4   | [...](https://github.com/OpencontentCoop/ocmultibinary/compare/2.2.2...2.2.4)           |
| opencontent/ocopenapi-ls              | 1.0.1     | 1.3.2   | [...](https://github.com/OpencontentCoop/ocopenapi-ls/compare/1.0.1...1.3.2)            |
| opencontent/openpa-ls                 | 3.10.8    | 3.11.1  | [...](https://github.com/OpencontentCoop/openpa/compare/3.10.8...3.11.1)                |
| opencontent/openpa_bootstrapitalia-ls | 1.0.10    | 1.1.2   | [...](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.0.10...1.1.2) |
| paragonie/random_compat               | v9.99.100 | REMOVED |                                                                                         |
| php-http/guzzle6-adapter              | bd7b405   | 6f108cf | [...](https://github.com/php-http/guzzle6-adapter/compare/bd7b405...6f108cf)            |
| php-http/message                      | 1.9.1     | 39db36d | [...](https://github.com/php-http/message/compare/1.9.1...39db36d)                      |
| symfony/polyfill-ctype                | 1c30264   | fade6de | [...](https://github.com/symfony/polyfill-ctype/compare/1c30264...fade6de)              |
| symfony/polyfill-intl-idn             | 045643b   | 4c489fd | [...](https://github.com/symfony/polyfill-intl-idn/compare/045643b...4c489fd)           |
| symfony/polyfill-intl-normalizer      | 37078a8   | 69609f9 | [...](https://github.com/symfony/polyfill-intl-normalizer/compare/37078a8...69609f9)    |
| symfony/polyfill-mbstring             | 48928d4   | 401c9d9 | [...](https://github.com/symfony/polyfill-mbstring/compare/48928d4...401c9d9)           |
| symfony/polyfill-php70                | 0dd93f2   | REMOVED |                                                                                         |
| symfony/polyfill-php72                | dc6ef20   | 4a4465f | [...](https://github.com/symfony/polyfill-php72/compare/dc6ef20...4a4465f)              |
| symfony/polyfill-php73                | fffa1a5   | 8c0d39c | [...](https://github.com/symfony/polyfill-php73/compare/fffa1a5...8c0d39c)              |
| symfony/polyfill-php80                | c3616e7   | 3a11f3d | [...](https://github.com/symfony/polyfill-php80/compare/c3616e7...3a11f3d)              |
| zetacomponents/console-tools          | 1.7.1     | 1.7.2   | [...](https://github.com/zetacomponents/ConsoleTools/compare/1.7.1...1.7.2)             |

Relevant changes by repository:

**[opencontent/occsvimport-ls changes between 2.4.0 and 2.4.1](https://github.com/OpencontentCoop/occsvimport/compare/2.4.0...2.4.1)**
 * Quando scarica un file da remoto calcola il nome dall'header Content-Disposition filename

**[opencontent/occustomfind-ls changes between 1.0 and 2.1.2](https://github.com/OpencontentCoop/occustomfind/compare/1.0...2.1.2)**
 * Add opendatadataset datatype Add repository provider
 * Bugfix in custom export
 * Fix wrong file position
 * Expose opendatadataset in openapi
 * Fix bug in OpendataDatasetProvider
 * Fix bug in delete dataset gui

**[opencontent/oceditorialstuff-ls changes between 2.4.2 and 2.5.0](https://github.com/OpencontentCoop/oceditorialstuff/compare/2.4.2...2.5.0)**
 * Permette la personalizzazione delle notifiche mail (per le azioni  OCEditorialStuffActionHandler::notifyOwner e  OCEditorialStuffActionHandler::notifyGroup)

**[opencontent/ocinstaller changes between 35c8665 and 7a4ec2b](https://github.com/OpencontentCoop/ocinstaller/compare/35c8665...7a4ec2b)**
 * Fix dump_tag_tree tool, add recaptcha3 installer

**[opencontent/ocmultibinary-ls changes between 2.2.2 and 2.2.4](https://github.com/OpencontentCoop/ocmultibinary/compare/2.2.2...2.2.4)**
 * Add missing translation
 * Add error translations

**[opencontent/ocopenapi-ls changes between 1.0.1 and 1.3.2](https://github.com/OpencontentCoop/ocopenapi-ls/compare/1.0.1...1.3.2)**
 * Aggiunge un endpoint dedicato per gli attributi multibinary
 * Aggiunge le descrizioni degli endpoint multibinary
 * Permette il concatenamento di più endpoint provider
 * Add patch operation
 * Rename auth user api class
 * Fix path generation in NodeClassesEndpointFactory
 * Fix bug in NodeClassesEndpointFactory path generation

**[opencontent/openpa-ls changes between 3.10.8 and 3.11.1](https://github.com/OpencontentCoop/openpa/compare/3.10.8...3.11.1)**
 * Permette la configurazione di Google Recaptcha v3
 * Aggiorna le configurazioni degli attributi di classe direttamente dal openpa/recaptcha

**[opencontent/openpa_bootstrapitalia-ls changes between 1.0.10 and 1.1.2](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.0.10...1.1.2)**
 * Migliora la visualizzazione del pannello strumenti in funzione delle dahsboard collaborative
 * Corregge un problema del calendario per cui non veniva visualizzata correttamente la data di fine evento
 * Permette di modificare la singola traduzione dal pannello Info
 * Predispone un nome di attributo per gestire il redirect al login
 * Corregge il breadcrumb delle pagine argomento
 * Aggiunge il controllo dello stato Privacy nelle openapi
 * Introduce un modulo per raccogliere dagli utenti riscontri sull’utilizzo del sito
 * Migliora la visualizzazione del blocco Lista Paginata utilizzando le viste presenti negli altri blocchi
 * Permette di aggiungere un'immagine di sfondo nel blocco remote contents
 * Pemette di aggiungere una breve descrizione nei blocchi lista automatica, manuale e paginata
 * Corregge un problema di visualizzazione nella vista di conferma pubblicazione
 * Visualizza icona e tipo di contenuto nei risultati del motore di ricerca
 * Corregge un problema di visualizzazione delle schede contatti che si verificava in Chrome
 * Imposta l'internazionalizzazione delle stringhe del motore di ricerca
 * Permette di nascondere la Guida al cittadino delle pagine trasparenza tramite configurazione
 * Migliora l'usabilità del motore di ricerca introducendo i parametri di ordinamento
 * Visualizza ufficio e area nella pagina argomento
 * Abilita il layout di default per la classe politico
 * Impedisce che gli indirizzi email vadano a capo nelle card teaser
 * Aggiunge il link al titolo e all'immagine delle card
 * Aggiunge il modulo feedback nella pagina di ricerca
 * Allarga lo spazio del bottone read more nel blocco oggetto singolo
 * Permette di visualizzare la tagline anche in caso di opzione solo logo
 * Corregge alcuni bug minori
 * Corregge un bug di calcolo dei colori nel banner
 * Rimuove dai template gli stili inline
 * Ridisegna il blocco ricerca luoghi
 * Corregge la visualizzazione delle pagine tags/view
 * Permette di inserire tramite configurazione un testo introduttivo al pannello Gestione collaborativa dei contenuti
 * Abilita chosen su mobile
 * Visualizza il testo introduttivo nel blocco Lista Paginata
 * Corregge alcuni bug minori
 * Corregge alcuni bug nel rendering della valutazione
 * Evidenza maggiormente il titolo nei risultati di ricerca
 * Corregge un bug nella configurazione base di editorialstuff

## [2.0.19](https://gitlab.com/opencontent/opencity/compare/2.0.18...2.0.19) - 2020-10-18
- Fix pgcrypto install script 
- Remove share volume sql

#### Code dependencies
| Changes                               | From           | To        | Compare                                                                                 |
|---------------------------------------|:---------------|:----------|:----------------------------------------------------------------------------------------|
| aws/aws-sdk-php                       | 3.158.2        | 3.158.8   | [...](https://github.com/aws/aws-sdk-php/compare/3.158.2...3.158.8)                     |
| composer/installers                   | c462a69        | f69761f   | [...](https://github.com/composer/installers/compare/c462a69...f69761f)                 |
| opencontent/ocinstaller               | f5c1cc8        | 35c8665   | [...](https://github.com/OpencontentCoop/ocinstaller/compare/f5c1cc8...35c8665)         |
| opencontent/ocopenapi-ls              | 1.0            | 1.0.1     | [...](https://github.com/OpencontentCoop/ocopenapi-ls/compare/1.0...1.0.1)              |
| opencontent/ocopendata-ls             | 2.24.3         | 2.24.4    | [...](https://github.com/OpencontentCoop/ocopendata/compare/2.24.3...2.24.4)            |
| opencontent/ocopendata_forms-ls       | 1.6.6          | 1.6.7     | [...](https://github.com/OpencontentCoop/ocopendata_forms/compare/1.6.6...1.6.7)        |
| opencontent/openpa_bootstrapitalia-ls | 1.0.9          | 1.0.10    | [...](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.0.9...1.0.10) |
| paragonie/random_compat               | v9.99.99.x-dev | v9.99.100 | [...](https://github.com/paragonie/random_compat/compare/v9.99.99.x-dev...v9.99.100)    |
| php-http/message                      | 1.9.0          | 1.9.1     | [...](https://github.com/php-http/message/compare/1.9.0...1.9.1)                        |
| psr/container                         | b1fbdff        | 381524e   | [...](https://github.com/php-fig/container/compare/b1fbdff...381524e)                   |

Relevant changes by repository:
**[opencontent/ocinstaller changes between f5c1cc8 and 35c8665](https://github.com/OpencontentCoop/ocinstaller/compare/f5c1cc8...35c8665)**
 * Make bigint type to ezcontentobject.published and ezcontentobject.modified 
 * add install pgcrypto script 

**[opencontent/ocopenapi-ls changes between 1.0 and 1.0.1](https://github.com/OpencontentCoop/ocopenapi-ls/compare/1.0...1.0.1)**
 * Imposta gli errori di database come eccezioni 

**[opencontent/ocopendata-ls changes between 2.24.3 and 2.24.4](https://github.com/OpencontentCoop/ocopendata/compare/2.24.3...2.24.4)**
 * Aumento il limite massimo di ricerca in env default a 300 (per compatibilità con ocopendata_forms) 

**[opencontent/ocopendata_forms-ls changes between 1.6.6 and 1.6.7](https://github.com/OpencontentCoop/ocopendata_forms/compare/1.6.6...1.6.7)**
 * Corregge un problema di configurazione 

**[opencontent/openpa_bootstrapitalia-ls changes between 1.0.9 and 1.0.10](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.0.9...1.0.10)**
 * Visualizza le lingue disponibili per il contenuto solo se non è presente il language switcher 
 * Corregge un errore di digitazione 
 * Imposta le categorie di attributo di default in content.ini 
 * Corregge un problema di visualizzazione della pagina se non è presente il menu laterale 


## [2.0.18](https://gitlab.com/opencontent/opencity/compare/2.0.17...2.0.18) - 2020-10-17
- Added fix to ensure that installer starts only if pgcrypto is available
- Mkdir only if not exists

## [2.0.17](https://gitlab.com/opencontent/opencity/compare/2.0.16...2.0.17) - 2020-10-06
- Use registry.gitlab.com/opencontent/ezpublish/php:php7.2.33-clean as base image Fix install script 
- Add openapi extension to expose openapi 3 rest api

#### Installer
- Update to version 2.0.17

Relevant changes:
- add pagina_trasparenza/fields_blocks
- add article/related_services and public_service/news_and_updates
- Fix class extra in document and employee
- add description to time_indexed_role/priorita
- add article/files field
- Add tagtree Tipologia di procedimento, add check_eztags_sequence, Add Speciali content, Add office/related_office field, remove tag "Servizio interno all'ente"
- add module topic tree v.0.0.1
- Fix class_constraint_list in public_organization
- Fix argomento class_constraint in topic
- Move office/office_manager from group struttura to persone
- Fix wrong class in administrative_area/allegati

#### Code dependencies
| Changes                               | From    | To        | Compare                                                                                |
|---------------------------------------|:--------|:----------|:---------------------------------------------------------------------------------------|
| aws/aws-sdk-php                       | 3.152.0 | 3.158.2   | [...](https://github.com/aws/aws-sdk-php/compare/3.152.0...3.158.2)                    |
| clue/stream-filter                    | v1.4.1  | v1.5.0    | [...](https://github.com/clue/php-stream-filter/compare/v1.4.1...v1.5.0)               |
| easyrdf/easyrdf                       | 7279d7f | a984ecb   | [...](https://github.com/easyrdf/easyrdf/compare/7279d7f...a984ecb)                    |
| guzzlehttp/promises                   | bbf3b20 | 60d379c   | [...](https://github.com/guzzle/promises/compare/bbf3b20...60d379c)                    |
| opencontent/ezpostgresqlcluster-ls    | 1c50dd6 | f37c194   | [...](https://github.com/Opencontent/ezpostgresqlcluster/compare/1c50dd6...f37c194)    |
| opencontent/occhart-ls                | 1.1     | 1.2.0     | [...](https://github.com/OpencontentCoop/occhart/compare/1.1...1.2.0)                  |
| opencontent/occodicefiscale-ls        | 542aa99 | daac5a8   | [...](https://github.com/OpencontentCoop/occodicefiscale/compare/542aa99...daac5a8)    |
| opencontent/ocinstaller               | 8a20be4 | f5c1cc8   | [...](https://github.com/OpencontentCoop/ocinstaller/compare/8a20be4...f5c1cc8)        |
| opencontent/ocopendata-ls             | 2.24.2  | 2.24.3    | [...](https://github.com/OpencontentCoop/ocopendata/compare/2.24.2...2.24.3)           |
| opencontent/ocopendata_forms-ls       | 1.6.4   | 1.6.6     | [...](https://github.com/OpencontentCoop/ocopendata_forms/compare/1.6.4...1.6.6)       |
| opencontent/openpa-ls                 | 3.10.7  | 3.10.8    | [...](https://github.com/OpencontentCoop/openpa/compare/3.10.7...3.10.8)               |
| opencontent/openpa_bootstrapitalia-ls | 1.0.6   | 1.0.9     | [...](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.0.6...1.0.9) |
| php-http/discovery                    | 1.10.0  | 1.12.0    | [...](https://github.com/php-http/discovery/compare/1.10.0...1.12.0)                   |
| psr/container                         | fc1bc36 | b1fbdff   | [...](https://github.com/php-fig/container/compare/fc1bc36...b1fbdff)                  |
| psr/event-dispatcher                  | 3b1c107 | 3ef040d   | [...](https://github.com/php-fig/event-dispatcher/compare/3b1c107...3ef040d)           |
| psr/http-client                       | 2dfb5f6 | 22b2ef5   | [...](https://github.com/php-fig/http-client/compare/2dfb5f6...22b2ef5)                |
| psr/http-factory                      | 1a2099a | 36fa03d   | [...](https://github.com/php-fig/http-factory/compare/1a2099a...36fa03d)               |
| psr/log                               | 0f73288 | dd738d0   | [...](https://github.com/php-fig/log/compare/0f73288...dd738d0)                        |
| symfony/cache-contracts               | 8034ca0 | 49a0e7a   | [...](https://github.com/symfony/cache-contracts/compare/8034ca0...49a0e7a)            |
| symfony/deprecation-contracts         | 5fa56b4 | d940483   | [...](https://github.com/symfony/deprecation-contracts/compare/5fa56b4...d940483)      |
| symfony/event-dispatcher              | 98e8d61 | 5.x-dev   | [...](https://github.com/symfony/event-dispatcher/compare/98e8d61...5.x-dev)           |
| symfony/event-dispatcher-contracts    | 0ba7d54 | 5e8ae4d   | [...](https://github.com/symfony/event-dispatcher-contracts/compare/0ba7d54...5e8ae4d) |
| symfony/options-resolver              | c2565c6 | 5.x-dev   | [...](https://github.com/symfony/options-resolver/compare/c2565c6...5.x-dev)           |
| symfony/polyfill-mbstring             | a6977d6 | 48928d4   | [...](https://github.com/symfony/polyfill-mbstring/compare/a6977d6...48928d4)          |
| symfony/polyfill-php72                | 639447d | dc6ef20   | [...](https://github.com/symfony/polyfill-php72/compare/639447d...dc6ef20)             |
| symfony/polyfill-php80                | d87d576 | c3616e7   | [...](https://github.com/symfony/polyfill-php80/compare/d87d576...c3616e7)             |
| symfony/service-contracts             | d15da7b | 90388a3   | [...](https://github.com/symfony/service-contracts/compare/d15da7b...90388a3)          |
| symfony/var-exporter                  | 1203f9c | 5.x-dev   | [...](https://github.com/symfony/var-exporter/compare/1203f9c...5.x-dev)               |
| symfony/yaml                          | a06dfcf | 4.4.x-dev | [...](https://github.com/symfony/yaml/compare/a06dfcf...4.4.x-dev)                     |
| erasys/openapi-php                    | NEW     | 9885e8f   |                                                                                        |
| illuminate/contracts                  | NEW     | 6.x-dev   |                                                                                        |
| justinrainbow/json-schema             | NEW     | 5.x-dev   |                                                                                        |
| opencontent/occustomfind-ls           | NEW     | 1.0       |                                                                                        |
| opencontent/ocopenapi-ls              | NEW     | 1.0       |                                                                                        |

Relevant changes by repository:

**[opencontent/ezpostgresqlcluster-ls changes between 1c50dd6 and f37c194](https://github.com/Opencontent/ezpostgresqlcluster/compare/1c50dd6...f37c194)**
 * Check OpenPABase class exists

**[opencontent/occhart-ls changes between 1.1 and 1.2.0](https://github.com/OpencontentCoop/occhart/compare/1.1...1.2.0)**
 * Add export csv in exporting menu

**[opencontent/occodicefiscale-ls changes between 542aa99 and daac5a8](https://github.com/OpencontentCoop/occodicefiscale/compare/542aa99...daac5a8)**
 * Considera solo gli oggetti pubblicati nel calcolo dei doppioni

**[opencontent/ocinstaller changes between 8a20be4 and f5c1cc8](https://github.com/OpencontentCoop/ocinstaller/compare/8a20be4...f5c1cc8)**
 * Add remove extra locations feature in content tree installer
 * Now inside a resource can import another resource

**[opencontent/ocopendata-ls changes between 2.24.2 and 2.24.3](https://github.com/OpencontentCoop/ocopendata/compare/2.24.2...2.24.3)**
 * Corregge un bug sul parsing dei tag nel AttributeConverter

**[opencontent/ocopendata_forms-ls changes between 1.6.4 and 1.6.6](https://github.com/OpencontentCoop/ocopendata_forms/compare/1.6.4...1.6.6)**
 * Permette l'utilizzo della libreria UploadFieldConnector in esecuzioni da linea di comando
 * Rimuove un log di debugging

**[opencontent/openpa-ls changes between 3.10.7 and 3.10.8](https://github.com/OpencontentCoop/openpa/compare/3.10.7...3.10.8)**
 * Corregge l'id del tree menu in caso di menu virtualizzato su alberatura di tag

**[opencontent/openpa_bootstrapitalia-ls changes between 1.0.6 and 1.0.9](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.0.6...1.0.9)**
 * Permette l'utilizzo di un'alberatura di argomenti invece che di una lista piatta
 * Corregge un problema per cui non veniva visualizzata l'obbligatorietà dei campi relazioni nei form dinamici
 * Corregge un problema per cui non veniva correttamente visualizzata l'icona nei risultati di ricerca
 * Aggiornamento delle dipendenze javascript Introduzione del nuovo tema warmred
 * Corregge un bug nel blocco Contenuti remoti
 * Imposta lo sfondo grigio nel primo blocco di default nella pagina argomento
 * Imposta di default lo sfondo esteso al primo blocco inserito da editor negli argomenti
 * Permette di specificare il formato responsive per le tabelle
 * Gestisce gli argomenti presenti nell'alberatura custom degli argomenti (custom_topics) negli input di ricerca
 * Espone i menu virtualizzati su alberatura di tag nei motori di ricerca
 * Permette di filtrare solo i campi obbligatori nel form di creazione o modifica di un contenuto
 * Aggiorna le stringhe di traduzione
 * Rende disponibile l'interfaccia di inserimento luoghi anche per classi diverse da event
 * Formatta la tabella dei dati dei grafici
 * Corregge il limite di default per i sotto argomenti
 * Visualizza document/description nel blocco ricerca_documenti
 * Imposta le zone e i blocchi per pagina_trasparenza
 * Imposta come predefinita la visualizzazione a mappa nel blocco ricerca_luoghi
 * Permette di escludere tipi di contenuto nel blocco argomenti

## [2.0.16](https://gitlab.com/opencontent/opencity/compare/2.0.15...2.0.16) - 2020-09-08

#### Installer
- Update to version 2.0.16

Relevant changes:
- Show document/reference_doc
- Fix administrative_area class extra
- Add missing pagine trasparenza
- Add ocmultibinary policy to Editor-Base
- Set default value to document/publication_start_time
- Fix role Editor-Trasparenza, add dirigenti query fields
- Fix openparole sorting in office and politico
- Fix Editor Amministrazione employee permission

#### Code dependencies
| Changes                               | From    | To       | Compare                                                                                |
|---------------------------------------|:--------|:---------|:---------------------------------------------------------------------------------------|
| aws/aws-sdk-php                       | 3.147.12 | 3.152.0 | [...](https://github.com/aws/aws-sdk-php/compare/3.147.12...3.152.0)                   |
| easyrdf/easyrdf                       | 6717db2  | 7279d7f | [...](https://github.com/easyrdf/easyrdf/compare/6717db2...7279d7f)                    |
| mtdowling/jmespath.php                | 42dae2c  | 30dfa00 | [...](https://github.com/jmespath/jmespath.php/compare/42dae2c...30dfa00)              |
| opencontent/ocbootstrap-ls            | 1.10.1   | 1.10.2  | [...](https://github.com/OpencontentCoop/ocbootstrap/compare/1.10.1...1.10.2)          |
| opencontent/ocopendata_forms-ls       | 1.6.3    | 1.6.4   | [...](https://github.com/OpencontentCoop/ocopendata_forms/compare/1.6.3...1.6.4)       |
| opencontent/openpa_bootstrapitalia-ls | 1.0.4    | 1.0.6   | [...](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.0.4...1.0.6) |
| php-http/discovery                    | 64a18cc  | 1.10.0  | [...](https://github.com/php-http/discovery/compare/64a18cc...1.10.0)                  |
| php-http/message                      | 226ba9f  | 1.9.0   | [...](https://github.com/php-http/message/compare/226ba9f...1.9.0)                     |
| symfony/cache-contracts               | 9771a09  | 8034ca0 | [...](https://github.com/symfony/cache-contracts/compare/9771a09...8034ca0)            |
| symfony/deprecation-contracts         | 5e20b83  | 5fa56b4 | [...](https://github.com/symfony/deprecation-contracts/compare/5e20b83...5fa56b4)      |
| symfony/event-dispatcher              | bbb461a  | 98e8d61 | [...](https://github.com/symfony/event-dispatcher/compare/bbb461a...98e8d61)           |
| symfony/event-dispatcher-contracts    | f6f613d  | 0ba7d54 | [...](https://github.com/symfony/event-dispatcher-contracts/compare/f6f613d...0ba7d54) |
| symfony/options-resolver              | e25bc4b  | c2565c6 | [...](https://github.com/symfony/options-resolver/compare/e25bc4b...c2565c6)           |
| symfony/polyfill-intl-idn             | 5dcab1b  | 045643b | [...](https://github.com/symfony/polyfill-intl-idn/compare/5dcab1b...045643b)          |
| symfony/service-contracts             | 58c7475  | d15da7b | [...](https://github.com/symfony/service-contracts/compare/58c7475...d15da7b)          |
| symfony/var-exporter                  | 1faf288  | 1203f9c | [...](https://github.com/symfony/var-exporter/compare/1faf288...1203f9c)               |
| symfony/yaml                          | 90faa84  | a06dfcf | [...](https://github.com/symfony/yaml/compare/90faa84...a06dfcf)                       |

Relevant changes by repository:

**[opencontent/ocbootstrap-ls changes between 1.10.1 and 1.10.2](https://github.com/OpencontentCoop/ocbootstrap/compare/1.10.1...1.10.2)**
 * Corregge un bug che impediva la visualizzazione dei testi di aiuto nei form dinamici

**[opencontent/ocopendata_forms-ls changes between 1.6.3 and 1.6.4](https://github.com/OpencontentCoop/ocopendata_forms/compare/1.6.3...1.6.4)**
 * Espone l'indirizzo da geocoder nominatim in modo meno verboso

**[opencontent/openpa_bootstrapitalia-ls changes between 1.0.4 and 1.0.6](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.0.4...1.0.6)**
 * Corregge un problema di visualizzazione nelle select chosen
 * Permette di visualizzare attributi in formato information collector
 * Revert: Corregge un problema di visualizzazione nelle select chosen
 * Corregge il colore del testo del banner se nessun colore di sfondo è selezionato
 * Permette una maggiore customizzazione del blocco Contenuti remoti
 * Corregge un errore di rendering javascript nel blocco lista paginata
 * Corregge l'ordinamento dei contenuti extra nella pagina trasparenza
 * Migliora il form dinamico di inserimento e modifica del Documento inserendo e validando gli attributi file e link
 * Migliora l'ordinamento delle persone nell'attributo di tipo ruolo
 * Abilita la possibilità di navigare in tutta l'alberatura per tutti gli attributi di tipo relazioni oggetti con vista "sfoglia"
 * Permette di di modificare testo del cookie alert
 * Corregge alcune imprecisioni sull'utilizzo dei font
 * Corregge l'ordinamento dei ruoli per priorità
 * Nasconde il titolo nei blocchi relazionati (con vista card teaser) nel caso di un unico oggetto relazionato per gli attributi has_spatial_coverage, has_online_contact_point, opening_hours_specification
 * Imposta l'immagine originale per i blocchi ricerca e argomenti per evitare la degenerazione dell'immagine
 * Nasconde il bullet dall'elenco ruoli in caso di ruolo singolo
 * Corregge alcune stringhe di traduzione
 * Migliora la paginazione del blocco lista_paginata
 * Migliora la visualizzazione del pulsante canale digitale

## [2.0.15](https://gitlab.com/opencontent/opencity/compare/2.0.3...2.0.15) - 2020-08-05

**Align the numbering of the repository tags with the version of the main installer**

- Update version in publiccode
- Update main installer, deps and settings
- Add all private net to acl invalidators
- Update OpendataRemoteContents block ini

#### Installer
- Update to version 2.0.15

Relevant changes:
- Allow Editor Servizi to edit tag description
- Add priority and main role attributes to time_indexed_role
- Set political_body people default role sort to type
- Fix online_contact_point phone_availability_time default placement
- Fix document and online_contact_point class extra
- Fix banner internal location relation constraint
- Fix typo in tag descriptions
- Fix version compare in patch content for update

#### Code dependencies
| Changes                               | From    | To       | Compare                                                                                |
|---------------------------------------|:--------|:---------|:---------------------------------------------------------------------------------------|
| aws/aws-sdk-php                       | 3.147.2 | 3.147.12 | https://github.com/aws/aws-sdk-php/compare/3.147.2...3.147.12                          |
| easyrdf/easyrdf                       | 1ad9066 | 6717db2  | https://github.com/easyrdf/easyrdf/compare/1ad9066...6717db2                           |
| maxh/php-nominatim                    | 40e008e | 311363b  | https://github.com/maxhelias/php-nominatim/compare/40e008e...311363b                   |
| mtdowling/jmespath.php                | 39d4f63 | 42dae2c  | https://github.com/jmespath/jmespath.php/compare/39d4f63...42dae2c                     |
| opencontent/ocbootstrap-ls            | 1.10.0  | 1.10.1   | https://github.com/OpencontentCoop/ocbootstrap/compare/1.10.0...1.10.1                 |
| opencontent/ocinstaller               | 18c4769 | 8a20be4  | https://github.com/OpencontentCoop/ocinstaller/compare/18c4769...8a20be4               |
| opencontent/openpa-ls                 | 3.10.3  | 3.10.7   | https://github.com/OpencontentCoop/openpa/compare/3.10.3...3.10.7                      |
| opencontent/openpa_bootstrapitalia-ls | 1.0.0   | 1.0.4    | https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.0.0...1.0.4        |
| symfony/event-dispatcher              | 0403953 | bbb461a  | https://github.com/symfony/event-dispatcher/compare/0403953...bbb461a                  |
| symfony/polyfill-intl-idn             | bc6549d | 5dcab1b  | https://github.com/symfony/polyfill-intl-idn/compare/bc6549d...5dcab1b                 |

Relevant changes by repository:

**[opencontent/ocbootstrap-ls changes between 1.10.0 and 1.10.1](https://github.com/OpencontentCoop/ocbootstrap/compare/1.10.0...1.10.1)**
 * Corregge la visualizzazione dei form per ezsurvey in bootstrap 4

**[opencontent/ocinstaller changes between 18c4769 and 8a20be4](https://github.com/OpencontentCoop/ocinstaller/compare/18c4769...8a20be4)**
 * Add reindex step

**[opencontent/openpa-ls changes between 3.10.3 and 3.10.7](https://github.com/OpencontentCoop/openpa/compare/3.10.3...3.10.7)**
 * Permette a content_link di riconoscere se un link è al nodo o a un nodo/link esterno
 * Corregge un possibile errore nel calcolo delle aree tematiche
 * Corregge un typo in cookie
 * Migliora la visualizzazione della versione del software

**[opencontent/openpa_bootstrapitalia-ls changes between 1.0.0 and 1.0.3](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/1.0.0...1.0.3)**
 * Corregge una regressione riapplicando il font serif ai blocchi di testo nelle visualizzazioni full
 * Espone gli attributi nell'ordine corretto in visualizzazione full
 * Corregge l'esposizione degli attributi nell'ordine corretto in visualizzazione full considerando anche i custom attributes
 * Formatta le card degli oggetti di classe html_content visualizzando solo il contenuto non filtrato dell'attributo html
 * Migliora il blocco per l'inclusione di contenuti remoti aggiungendo facets e impostazioni avanzate
 * Corregge un possibile errore nel attributo di tipo reverse relations
 * Merge branch 'improve-remote-block'
 * Corregge un errore per cui non era possibile modificare un banner se il link era interno
 * Considera le date di inizio e fine e migliora la visualizzazione dei ruoli openpa
 * Permette l'inserimento del link Vedi tutti nel blocco Contenuti remoti
 * Permette l'edit inline della descrizione del tag
 * Permettere di attivare il menu esteso (se presente un attributo booleano 'show_extended_menu' in homepage)
 * Corregge un problema di visualizzazione della descrizione del tag

## [2.0.3](https://gitlab.com/opencontent/opencity/compare/2.0.2...2.0.3) - 2020-07-22

- Update version in publiccode
- Update main installer, deps and settings
- Update Docker.solr to include jts lib in solr.war 
- Update solr schema with spatial search field

#### Installer
- Update main installer at version 2.0.14
- Update demo installer at version 0.0.2 

Relevant changes:
- Corregge un problema di visualizzazione dell'attributo event/takes_place_in
- Aggiunge alla classe image la visualizzazione dei correlati inversi
- Corregge le visualizzazioni dell'attributo Canale digitale del servizio collegato della classe documento document/has_service
- Permette all'editor base di rimuovere immagini
- Impone il tipo di servizio come etichetta dell'icona dei servizi pubblici
- Corregge la collocazione degli orari della classe luogo in "Orari strutture" invece di "Orari servizi"
- Corregge le visualizzazioni di servizio pubblico
- Corregge le visualizzazioni di ufficio
- Corregge le visualizzazioni di area amministrativa
- Visualizza l'abstract nella card teaser dei documenti 
- Visualizza il titolo alternativo del servizio pubblico
- Aggiunge la selezione del colore di sfondo nella classe banner
- Aggiunge il flag show_cards nella pagina_sito e nella frontpage
- Introduce la descrizione dei tag per le Tipologie di servizio
- Introduce le definizioni per il cambio stato e il cambio sezione
- Imposta il workflow di cambio data e il cambio stato per articolo e documento

#### Code dependencies
| Changes                               | From    | To             | Compare                                                                           |
|---------------------------------------|:--------|:---------------|:----------------------------------------------------------------------------------|
| aws/aws-sdk-php                       | 3.145.2 | 3.147.2        | https://github.com/aws/aws-sdk-php/compare/3.145.2...3.147.2                      |
| easyrdf/easyrdf                       | 1148be7 | 1ad9066        | https://github.com/easyrdf/easyrdf/compare/1148be7...1ad9066                      |
| friendsofsymfony/http-cache           | e6e9218 | 42c96a0        | https://github.com/FriendsOfSymfony/FOSHttpCache/compare/e6e9218...42c96a0        |
| maxh/php-nominatim                    | cec1397 | 40e008e        | https://github.com/maxhelias/php-nominatim/compare/cec1397...40e008e              |
| mtdowling/jmespath.php                | 52168cb | 39d4f63        | https://github.com/jmespath/jmespath.php/compare/52168cb...39d4f63                |
| opencontent/ocbootstrap-ls            | 1.9.8   | 1.10.0         | https://github.com/OpencontentCoop/ocbootstrap/compare/1.9.8...1.10.0             |
| opencontent/occhangeobjectdate-ls     | 2.0     | 2.1.0          | https://github.com/OpencontentCoop/occhangeobjectdate/compare/2.0...2.1.0         |
| opencontent/ocinstaller               | 5a366f4 | 18c4769        | https://github.com/OpencontentCoop/ocinstaller/compare/5a366f4...18c4769          |
| opencontent/openpa-ls                 | c9105eb | 3.10.3         | https://github.com/OpencontentCoop/openpa/compare/c9105eb...3.10.3                |
| opencontent/openpa_bootstrapitalia-ls | aa2c28f | 1.0.0          | https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/aa2c28f...1.0.0 |
| php-http/client-common                | 75470e5 | e37e46c        | https://github.com/php-http/client-common/compare/75470e5...e37e46c               |
| php-http/discovery                    | 3cc2bcd | 64a18cc        | https://github.com/php-http/discovery/compare/3cc2bcd...64a18cc                   |
| php-http/httplug                      | c9b2424 | 191a0a1        | https://github.com/php-http/httplug/compare/c9b2424...191a0a1                     |
| symfony/options-resolver              | 9ae2b94 | e25bc4b        | https://github.com/symfony/options-resolver/compare/9ae2b94...e25bc4b             |
| symfony/polyfill-ctype                | 2edd75b | 1c30264        | https://github.com/symfony/polyfill-ctype/compare/2edd75b...1c30264               |
| symfony/polyfill-intl-idn             | a57f816 | bc6549d        | https://github.com/symfony/polyfill-intl-idn/compare/a57f816...bc6549d            |
| symfony/polyfill-mbstring             | 7110338 | a6977d6        | https://github.com/symfony/polyfill-mbstring/compare/7110338...a6977d6            |
| symfony/polyfill-php72                | 3d9c70f | 639447d        | https://github.com/symfony/polyfill-php72/compare/3d9c70f...639447d               |
| symfony/polyfill-php73                | fa0837f | fffa1a5        | https://github.com/symfony/polyfill-php73/compare/fa0837f...fffa1a5               |
| symfony/polyfill-php80                | 4a5b6bb | d87d576        | https://github.com/symfony/polyfill-php80/compare/4a5b6bb...d87d576               |
| opencontent/eztagdescription-ls       | NEW     | 1.0            |                                                                                   |
| paragonie/random_compat               | NEW     | v9.99.99.x-dev |                                                                                   |
| symfony/polyfill-intl-normalizer      | NEW     | 37078a8        |                                                                                   |
| symfony/polyfill-php70                | NEW     | 0dd93f2        |                                                                                   |

Relevant changes by repository:

**[opencontent/ocbootstrap-ls changes between 1.9.10 and 1.10.0](https://github.com/OpencontentCoop/ocbootstrap/compare/1.9.10...1.10.0)**
 * Introduce i template bootstrap 4 per ezsurvey

**[opencontent/ocinstaller changes between ec5eaf2 and 18c4769](https://github.com/OpencontentCoop/ocinstaller/compare/ec5eaf2...18c4769)**
 * Add change_state, change_section, tag_description Bugifx

**[opencontent/openpa-ls changes between c9105eb and 3.10.3](https://github.com/OpencontentCoop/openpa/compare/c9105eb...3.10.3)**
 * Corregge un bug in openpa/object
 * Corregge la fetch per il controllo degli stati

**[opencontent/openpa_bootstrapitalia-ls changes between aa2c28f and 1.0.0](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/aa2c28f...1.0.0)**
 * Migliora la visualizzazione l'attributo alternative_name in apertura
 * Aggiunge un livello di cache per le richieste delle alberature di tag
 * Evita di mostrare nelle card il tempo di lettura se è a zero
 * Permette di accedere da frontend all'interfaccia di modifica/rimozione per i link e i banner
 * Evita di duplicare l'immagine principale di un contenuto nella galleria
 * Permette la visualizzazione dei tag in formato card nelle pagine con menù virtualizzato in alberatura di tag
 * Corregge un problema di visualizzazione dei link nell'abstract degli elementi di una lista paginata
 * Introduce il blocco di ricerca (come da template TeamDigitale)
 * Introduce la vista di blocco banner colorati per l'esposizione dei Siti tematici (come da template TeamDigitale)
 * Merge branch 'cached_tag_tree'
 * Previene disallineamenti di elementi flottanti nei testi formattati
 * Migliora la visualizzazione l'attributo alt_name in apertura
 * Permette di personalizzare l'etichetta dell'icona in base a un attributo di tipo eztags
 * Corregge un bug sulla visualizzazione di un link come card
 * Corregge l'icona di modifica dell'icona per l'accesso alla modifica del link/banner
 * Corregge la visualizzazione dell'attributo external_contact_point
 * Evita un possibile errore nell'edit handler
 * Corregge la traduzione di alcune stringhe statiche
 * Corregge la traduzione di alcune stringhe statiche
 * Introduce ezsurvey in websitetoolbar
 * Permette durante la redazione di un articolo di creare documenti nella cartella "Documenti (tecnici) di supporto" ma di poter navigare e allegare Documenti che stanno anche in altre sezioni
 * Permettere di nascondere il link di accesso all'area personale (se presente un attributo booleano 'hide_access_menu' in homepage)
 * Migliora la modalità selezione/inserimento dei luoghi in un evento

## [2.0.2](https://gitlab.com/opencontent/opencity/compare/2.0.1...2.0.2) - 2020-07-07

- Update version in publiccode

#### Installer
- Update main installer at version 2.0.13
- Update trasparenza installer at version 0.0.5 

Relevant changes:
- Add section restricted 
- Change datatype in public_service/conditions 
- Fix office class extra 
- Fix fields in some trasparenza contents 
- Add role Editor-Backend 
- Add change section permission to role Editor-Base

#### Code dependencies
| Changes                               | From    | To      | Compare                                                                             |
|---------------------------------------|:--------|:--------|:------------------------------------------------------------------------------------|
| aws/aws-sdk-php                       | 3.143.0 | 3.145.2 | https://github.com/aws/aws-sdk-php/compare/3.143.0...3.145.2                        |
| easyrdf/easyrdf                       | 1395e5d | 1148be7 | https://github.com/easyrdf/easyrdf/compare/1395e5d...1148be7                        |
| maxh/php-nominatim                    | 7bd5fd7 | cec1397 | https://github.com/maxhelias/php-nominatim/compare/7bd5fd7...cec1397                |
| opencontent/ocoperatorscollection-ls  | 2.1.1   | 2.2.0   | https://github.com/OpencontentCoop/ocoperatorscollection/compare/2.1.1...2.2.0      |
| opencontent/openpa_bootstrapitalia-ls | 6bd731b | aa2c28f | https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/6bd731b...aa2c28f |
| opencontent/openpa_newsletter-ls      | 2.9.3   | 2.9.4   | https://github.com/OpencontentCoop/openpa_newsletter/compare/2.9.3...2.9.4          |
| php-http/client-common                | 7c27fe6 | 75470e5 | https://github.com/php-http/client-common/compare/7c27fe6...75470e5                 |
| php-http/discovery                    | 1.8.0   | 3cc2bcd | https://github.com/php-http/discovery/compare/1.8.0...3cc2bcd                       |
| php-http/promise                      | 02ee67f | 4c4c1f9 | https://github.com/php-http/promise/compare/02ee67f...4c4c1f9                       |
| psr/http-client                       | fd5d37a | 2dfb5f6 | https://github.com/php-fig/http-client/compare/fd5d37a...2dfb5f6                    |
| semsol/arc2                           | 2.5     | 2.5.1   | https://github.com/semsol/arc2/compare/2.5...2.5.1                                  |
| symfony/cache-contracts               | 8cdaf96 | 9771a09 | https://github.com/symfony/cache-contracts/compare/8cdaf96...9771a09                |
| symfony/event-dispatcher-contracts    | 3bf9307 | f6f613d | https://github.com/symfony/event-dispatcher-contracts/compare/3bf9307...f6f613d     |
| symfony/service-contracts             | fa63c88 | 58c7475 | https://github.com/symfony/service-contracts/compare/fa63c88...58c7475              |
| psr/http-factory                      | NEW     | 1a2099a |                                                                                     |

Relevant changes by repository:

**[opencontent/ocoperatorscollection-ls changes between 2.1.1 and 2.2.0](https://github.com/OpencontentCoop/ocoperatorscollection/compare/2.1.1...2.2.0)**
 * Avoid switch to user with admin capabilities

**[opencontent/openpa_bootstrapitalia-ls changes between 6bd731b and aa2c28f](https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/6bd731b...aa2c28f)**
 * Corregge il feed di default per le ultime novità
 * Permette la customizzazione del menu Argomenti (solo in presenza degli attributi topic_menu_label e/o hide_topic_menu)
 * Corregge un problema per cui veniva caricata un'immagine vuota nel template card default
 * Apre i link di "siti esterni" in una nuova finestra
 * Espone all'editor il form per la modifica della sezione di un contenuto di livello maggiore di 3
 * Corregge la definizione del template del blocco HTML

**[opencontent/openpa_newsletter-ls changes between 2.9.3 and 2.9.4](https://github.com/OpencontentCoop/openpa_newsletter/compare/2.9.3...2.9.4)**
 * Fix bug in has_newsletter operator

## [2.0.1](https://gitlab.com/opencontent/opencity/compare/2.0.0...2.0.1) - 2020-06-25

- Update version in publiccode

#### Installer
- Update main installer at version 2.0.12
- Update newsletter installer at version 0.0.2
- Update trasparenza installer at version 0.0.4 

Relevant changes:
- Corregge il nome di menu di Uffici e Organi politici 
- Aggiorna la tassonomia dei luoghi sulla base della [versione 0.3 del Vocabolario controllato sui luoghi pubblici di interesse culturale](https://github.com/italia/daf-ontologie-vocabolari-controllati/tree/master/VocabolariControllati/classifications-for-culture/cultural-interest-places)
- Corregge vari bug sulle classi di contenuto e sui ruoli


#### Code dependencies
| Changes                               | From    | To      | Compare                                                                             |
|---------------------------------------|:--------|:--------|:------------------------------------------------------------------------------------|
| aws/aws-sdk-php                       | 3.135.0 | 3.143.0 | https://github.com/aws/aws-sdk-php/compare/3.135.0...3.143.0                        |
| composer/installers                   | 8669edf | c462a69 | https://github.com/composer/installers/compare/8669edf...c462a69                    |
| easyrdf/easyrdf                       | 8227c64 | 1395e5d | https://github.com/easyrdf/easyrdf/compare/8227c64...1395e5d                        |
| friendsofsymfony/http-cache           | 7560f30 | e6e9218 | https://github.com/FriendsOfSymfony/FOSHttpCache/compare/7560f30...e6e9218          |
| guzzlehttp/promises                   | 89b1a76 | bbf3b20 | https://github.com/guzzle/promises/compare/89b1a76...bbf3b20                        |
| ml/json-ld                            | 1.1.0   | 1.2.0   | https://github.com/lanthaler/JsonLD/compare/1.1.0...1.2.0                           |
| opencontent/oceasyontology-ls         | 66ff27c | 02e06ae | https://github.com/OpencontentCoop/oceasyontology/compare/66ff27c...02e06ae         |
| opencontent/ocfoshttpcache-ls         | aa42fb9 | faa918c | https://github.com/OpencontentCoop/ocfoshttpcache/compare/aa42fb9...faa918c         |
| opencontent/ocinstaller               | b0c3ec7 | 5a366f4 | https://github.com/OpencontentCoop/ocinstaller/compare/b0c3ec7...5a366f4            |
| opencontent/ocopendata-ls             | 2.24.1  | 2.24.2  | https://github.com/OpencontentCoop/ocopendata/compare/2.24.1...2.24.2               |
| opencontent/ocsupport-ls              | 49a42aa | 2ee7846 | https://github.com/OpencontentCoop/ocsupport/compare/49a42aa...2ee7846              |
| opencontent/ocwebhookserver-ls        | 32df3cf | aabd35a | https://github.com/OpencontentCoop/ocwebhookserver/compare/32df3cf...aabd35a        |
| opencontent/openpa-ls                 | 5353d99 | c9105eb | https://github.com/OpencontentCoop/openpa/compare/5353d99...c9105eb                 |
| opencontent/openpa_bootstrapitalia-ls | 8707ce1 | 6bd731b | https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/8707ce1...6bd731b |
| opencontent/openpa_newsletter-ls      | 2.8.1   | 2.9.3   | https://github.com/OpencontentCoop/openpa_newsletter/compare/2.8.1...2.9.3          |
| opencontent/openpa_userprofile-ls     | 2e192b1 | 4c7a67e | https://github.com/OpencontentCoop/openpa_userprofile/compare/2e192b1...4c7a67e     |
| php-http/client-common                | ca984d8 | 7c27fe6 | https://github.com/php-http/client-common/compare/ca984d8...7c27fe6                 |
| php-http/discovery                    | 82dbef6 | 1.8.0   | https://github.com/php-http/discovery/compare/82dbef6...1.8.0                       |
| php-http/message                      | fcf9b45 | 226ba9f | https://github.com/php-http/message/compare/fcf9b45...226ba9f                       |
| psr/event-dispatcher                  | cfea31e | 3b1c107 | https://github.com/php-fig/event-dispatcher/compare/cfea31e...3b1c107               |
| symfony/cache-contracts               | 2e8a2f5 | 8cdaf96 | https://github.com/symfony/cache-contracts/compare/2e8a2f5...8cdaf96                |
| symfony/deprecation-contracts         | ede224d | 5e20b83 | https://github.com/symfony/deprecation-contracts/compare/ede224d...5e20b83          |
| symfony/event-dispatcher              | d364824 | 0403953 | https://github.com/symfony/event-dispatcher/compare/d364824...0403953               |
| symfony/event-dispatcher-contracts    | 5a749bd | 3bf9307 | https://github.com/symfony/event-dispatcher-contracts/compare/5a749bd...3bf9307     |
| symfony/options-resolver              | 1cfd933 | 9ae2b94 | https://github.com/symfony/options-resolver/compare/1cfd933...9ae2b94               |
| symfony/polyfill-ctype                | 4719fa9 | 2edd75b | https://github.com/symfony/polyfill-ctype/compare/4719fa9...2edd75b                 |
| symfony/polyfill-intl-idn             | 47bd6aa | a57f816 | https://github.com/symfony/polyfill-intl-idn/compare/47bd6aa...a57f816              |
| symfony/polyfill-mbstring             | 81ffd3a | 7110338 | https://github.com/symfony/polyfill-mbstring/compare/81ffd3a...7110338              |
| symfony/polyfill-php72                | 37b0976 | 3d9c70f | https://github.com/symfony/polyfill-php72/compare/37b0976...3d9c70f                 |
| symfony/polyfill-php73                | 0f27e9f | fa0837f | https://github.com/symfony/polyfill-php73/compare/0f27e9f...fa0837f                 |
| symfony/polyfill-php80                | 8854dc8 | 4a5b6bb | https://github.com/symfony/polyfill-php80/compare/8854dc8...4a5b6bb                 |
| symfony/service-contracts             | 13111af | fa63c88 | https://github.com/symfony/service-contracts/compare/13111af...fa63c88              |
| symfony/var-exporter                  | 681d63f | 1faf288 | https://github.com/symfony/var-exporter/compare/681d63f...1faf288                   |
| symfony/yaml                          | 5f947e5 | 90faa84 | https://github.com/symfony/yaml/compare/5f947e5...90faa84                           |
| zetacomponents/mail                   | 1.9.1   | 1.9.2   | https://github.com/zetacomponents/Mail/compare/1.9.1...1.9.2                        |

Relevant changes by repository:

**opencontent/oceasyontology-ls changes between 66ff27c and 02e06ae**
 - Corregge un problema di compatibilità con ocopendata per l'attributo organization

**opencontent/ocfoshttpcache-ls changes between aa42fb9 and faa918c**
 - Permette di inserire l'id utente nel context hash

**opencontent/ocinstaller changes between b0c3ec7 and 5a366f4**
 - Add remove role assignment Add version compare condition
 - Add classid var function calling eZContentClass::classIDByIdentifier
 - add classattributeid and classattributeid_list expression function
 - Check trash Allow extra root datadir path
 - Add --force option to ignore version check Add add_tag, remove_tag, move_tag to handle single tag modification
 - Add patch_content to update single content attribute
 - Fix compatibility with eZ version 5.90.0
 - Add sort data in patch_content Fix patch_content error handling Improve version_compare Fix bug in tagtree synonyms Add dump script tools

**opencontent/ocopendata-ls changes between 2.24.1 and 2.24.2**
 - Corregge l'esposizione di oggetti correlati in default environment qualora essi siano convertiti in formato esteso

**opencontent/ocsupport-ls changes between 49a42aa and 2ee7846**
 - Add installer info

**opencontent/ocwebhookserver-ls changes between 32df3cf and aabd35a**
 - Add simple endpoint api
 - Add class definition shared_link
 - Fix trigger check, add response to test

**opencontent/openpa-ls changes between 5353d99 and c9105eb**
 - Aggiunge il link all'area personale ai valori inseribili nei contatti
 - Corregge un errore nella funzione di template per la ricerca delle strutture
 - Corregge un bug in OpenPASMTPTransport
 - Corregge il riconoscimento automatico del software in uso per la visualizzazione delle metriche di utilizzo
 - Corregge un bug nella definizione degli handler dei blocchi
 - Permette la personalizzazione dei valori head/meta da openpa/seo
 - Visualizza la versione dell'installer se presente in CreditSettings/CodeVersion

**opencontent/openpa_bootstrapitalia-ls changes between 8707ce1 and 6bd731b**
 - Corregge un bug nella ricerca di opendata_form
 - Implementa l'integrazione di openpa_newsletter/sendy
 - Permette la customizzazione del link di acceso all'area personale
 - Verifica che sia popolato almeno un campo tra file e link nella redazione di un documento
 - Typofix
 - Corregge un bug di visualizzazione del menu di accesso
 - Evita un possibile errore nel calcolo degli attributi opengraph
 - Introduce la possibilità di inserire il link Vedi tutti nei blocchi Lista. Corregge un bug di visualizzazione dei blocchi senza contenuto
 - Corregge un problema sulla validazione del documento per cui non era possibile modificare un documento
 - Corregge un problema per cui non era possibile creare automaticamente dataset
 - Corregge la visualizzazione del form della matrice dei compensi
 - Migliora la visualizzazione e la ricerca in Gestione accessi redazione
 - Nascondere l'indice della pagina nella visualizzazione del contenuto se è presente una voce sola
 - Aggiunge un colore di sfondo di default al blocco Argomenti
 - Aggiunge i temi cenerentola e verdone
 - Merge pull request #5 from OpencontentCoop/new_theme_cenerentola  Aggiunge i temi cenerentola e verdone
 - Corregge le faccette nel blocco lista paginata in caso di tag menu virtuale
 - Elimina le visualizzazioni tabellari forzate in pagina trasparenza
 - Introduce un nuovo blocco per il caricamento di contenuti ocopendata remoti
 - Include le pagine trasparenza nel motore di ricerca
 - Corregge un bug sulla definizione della profondità nel blocco Lista automatica
 - Corregge la visualizzazione del campo readting_time Considera attributi custom della homepage (topic_menu_label, hide_footer_menu) Permette di personalizzare i valori degli attributi meta (da feature di openpa)
 - Corregge un problema nella risoluzione delle immagini nei blocchi
 - Evita di visualizzare il nodo sorgente nei blocchi di tipo lista automatica
 - Corregge la radice degli ultimi contenuti in Strumenti per poter accedere anche ai contenuti di Amministrazione Trasparente
 - Perfeziona la funzionalità Preferito in toolbar  e mostra l'elenco preferiti in content/browse Visualizza le notifiche AnnounceKit
 - Introduce la vista "In evidenza" per il blocco singolo
 - Corregge un problema di visualizzazione dell'attributo Tempo di lettura

**opencontent/openpa_newsletter-ls changes between 2.8.1 and 2.9.3**
 - Add Sendy integration
 - Allow to archive a newsletter edition
 - Fix alert css height
 - Force informativa css color

**opencontent/openpa_userprofile-ls changes between 2e192b1 and 4c7a67e**
 - Considera gli attributi raccomandati per la validazione del profilo

## [2.0.0](https://gitlab.com/opencontent/opencity/compare/1.0.1...2.0.0) - 2020-04-21

- Update main Dockerfile
- Add custom Dockerfile for nginx solr varnish
- Refactor docker-compose example using ini settings ENV injection and removing custom ini files from conf.d
- Fix gitlab ci
- Update version in publiccode

#### Installer
- Include installer at version 2.0.3 

#### Code dependencies

| Changes                               | From      | To          | Compare                                                                             |
|---------------------------------------|:----------|:------------|:------------------------------------------------------------------------------------|
| aws/aws-sdk-php                       | 3.110.5   | 3.135.0     | https://github.com/aws/aws-sdk-php/compare/3.110.5...3.135.0                        |
| brookinsconsulting/gwutils            | 3d25c19   | REMOVED     |                                                                                     |
| composer/installers                   | 141b272   | 8669edf     | https://github.com/composer/installers/compare/141b272...8669edf                    |
| ezsystems/ezmbpaex-ls                 | 5.3.3.1   | 5.3.3.3     | https://github.com/Opencontent/ezmbpaex/compare/5.3.3.1...5.3.3.3                   |
| ezsystems/ezodf-ls                    | 5.3.8.1   | v5.3.8      | https://github.com/ezsystems/ezodf/compare/5.3.8.1...v5.3.8                         |
| ezsystems/ezpublish-legacy            | 19701b9   | 2020.1000.1 | https://github.com/Opencontent/ezpublish-legacy/compare/19701b9...2020.1000.1       |
| ezsystems/ezsurvey-ls                 | ed79c54   | REMOVED     |                                                                                     |
| friendsofsymfony/http-cache           | 01d87fa   | 7560f30     | https://github.com/FriendsOfSymfony/FOSHttpCache/compare/01d87fa...7560f30          |
| gggeek/ggwebservices                  | 01a5f39   | REMOVED     |                                                                                     |
| guzzlehttp/guzzle                     | a7010cc   | 6.5.x-dev   | https://github.com/guzzle/guzzle/compare/a7010cc...6.5.x-dev                        |
| guzzlehttp/promises                   | 17d36ed   | 89b1a76     | https://github.com/guzzle/promises/compare/17d36ed...89b1a76                        |
| makingwaves/sqlicolorpicker           | 1         | REMOVED     |                                                                                     |
| mtdowling/jmespath.php                | 2.4.0     | 52168cb     | https://github.com/jmespath/jmespath.php/compare/2.4.0...52168cb                    |
| mugoweb/mugo_varnish                  | 5ca77b7   | REMOVED     |                                                                                     |
| mugoweb/mugoobjectrelations           | d80a0ea   | REMOVED     |                                                                                     |
| netgen/ngopengraph                    | 119618c   | REMOVED     |                                                                                     |
| netgen/ngpush                         | 99c87d4   | REMOVED     |                                                                                     |
| opencontent/bcgooglesitemaps-ls       | 1.0       | REMOVED     |                                                                                     |
| opencontent/bfsurveyfile              | 2.1       | REMOVED     |                                                                                     |
| opencontent/cjwnewsletter-ls          | 3.0.2     | 3.0.4       | https://github.com/Opencontent/cjw_newsletter/compare/3.0.2...3.0.4                 |
| opencontent/collectexport-ls          | 1.1       | REMOVED     |                                                                                     |
| opencontent/easyvocs_connector-ls     | 398d54d   | REMOVED     |                                                                                     |
| opencontent/enhancedezbinaryfile-ls   | 2.0       | REMOVED     |                                                                                     |
| opencontent/ezflip-ls                 | 3.1       | REMOVED     |                                                                                     |
| opencontent/ezflowplayer-ls           | 2.0       | REMOVED     |                                                                                     |
| opencontent/ezpostgresqlcluster-ls    | db456e4   | 1c50dd6     | https://github.com/Opencontent/ezpostgresqlcluster/compare/db456e4...1c50dd6        |
| opencontent/mugosurvey_addons-ls      | 1.0.1     | REMOVED     |                                                                                     |
| opencontent/ocbonificobancario-ls     | 1.1       | REMOVED     |                                                                                     |
| opencontent/ocbootstrap-ls            | 60ca49d   | 1.9.8       | https://github.com/OpencontentCoop/ocbootstrap/compare/60ca49d...1.9.8              |
| opencontent/occhangeloginname-ls      | 1.0       | REMOVED     |                                                                                     |
| opencontent/occsvimport-ls            | 2.3.0     | 2.4.0       | https://github.com/OpencontentCoop/occsvimport/compare/2.3.0...2.4.0                |
| opencontent/oceditorialstuff-ls       | 2.2.2     | 2.4.2       | https://github.com/OpencontentCoop/oceditorialstuff/compare/2.2.2...2.4.2           |
| opencontent/ocevents-ls               | 1.1.0     | 1.1.9       | https://github.com/OpencontentCoop/ocevents/compare/1.1.0...1.1.9                   |
| opencontent/ocexportas-ls             | 1.3.3     | 1.3.5       | https://github.com/OpencontentCoop/ocexportas/compare/1.3.3...1.3.5                 |
| opencontent/ocgdprtools-ls            | 1.2.1     | 1.4.5       | https://github.com/OpencontentCoop/ocgdprtools/compare/1.2.1...1.4.5                |
| opencontent/ocmaintenance-ls          | 2.3.2     | 2.3.3       | https://github.com/OpencontentCoop/ocmaintenance/compare/2.3.2...2.3.3              |
| opencontent/ocmap-ls                  | 1.2       | 1.3         | https://github.com/OpencontentCoop/ocmap/compare/1.2...1.3                          |
| opencontent/ocmaps-ls                 | 1.0       | REMOVED     |                                                                                     |
| opencontent/ocmediaplayer-ls          | 1.1       | REMOVED     |                                                                                     |
| opencontent/ocmultibinary-ls          | 2.1       | 2.2.2       | https://github.com/OpencontentCoop/ocmultibinary/compare/2.1...2.2.2                |
| opencontent/ocopendata-ls             | 2.21.3    | 2.24.1      | https://github.com/OpencontentCoop/ocopendata/compare/2.21.3...2.24.1               |
| opencontent/ocopendata_forms-ls       | 50cee84   | 1.6.3       | https://github.com/OpencontentCoop/ocopendata_forms/compare/50cee84...1.6.3         |
| opencontent/ocrecaptcha-ls            | 1.3.1     | 1.4         | https://github.com/OpencontentCoop/ocrecaptcha/compare/1.3.1...1.4                  |
| opencontent/ocredirect-ls             | 1.0       | REMOVED     |                                                                                     |
| opencontent/ocsearchtools-ls          | 1.10.5    | 1.10.9      | https://github.com/OpencontentCoop/ocsearchtools/compare/1.10.5...1.10.9            |
| opencontent/ocselfimport-ls           | 1.1       | REMOVED     |                                                                                     |
| opencontent/ocsocialdesign-ls         | 1.4       | REMOVED     |                                                                                     |
| opencontent/ocsocialuser-ls           | 1.6.1     | REMOVED     |                                                                                     |
| opencontent/openpa-ls                 | 7bcc76a   | 5353d99     | https://github.com/OpencontentCoop/openpa/compare/7bcc76a...5353d99                 |
| opencontent/openpa_agenda-ls          | 1.21.1    | REMOVED     |                                                                                     |
| opencontent/openpa_booking-ls         | 4.3.1     | REMOVED     |                                                                                     |
| opencontent/openpa_bootstrapitalia-ls | 3658b86   | 8707ce1     | https://github.com/OpencontentCoop/openpa_bootstrapitalia/compare/3658b86...8707ce1 |
| opencontent/openpa_designitalia-ls    | 1.29.2    | REMOVED     |                                                                                     |
| opencontent/openpa_dimmi-ls           | 1.3.1     | REMOVED     |                                                                                     |
| opencontent/openpa_newsletter-ls      | 2.6.6     | 2.8.1       | https://github.com/OpencontentCoop/openpa_newsletter/compare/2.6.6...2.8.1          |
| opencontent/openpa_theme_2014-ls      | 2.13.1    | REMOVED     |                                                                                     |
| opencontent/wrapoperator-ls           | 1.1       | REMOVED     |                                                                                     |
| paradoxe/paradoxpdf                   | 7ab4eb7   | REMOVED     |                                                                                     |
| php-http/client-common                | 9a2a4c1   | ca984d8     | https://github.com/php-http/client-common/compare/9a2a4c1...ca984d8                 |
| php-http/discovery                    | e822f86   | 82dbef6     | https://github.com/php-http/discovery/compare/e822f86...82dbef6                     |
| php-http/guzzle6-adapter              | 4b491b7   | bd7b405     | https://github.com/php-http/guzzle6-adapter/compare/4b491b7...bd7b405               |
| php-http/httplug                      | d7f1b18   | c9b2424     | https://github.com/php-http/httplug/compare/d7f1b18...c9b2424                       |
| php-http/message                      | 274c2c2   | fcf9b45     | https://github.com/php-http/message/compare/274c2c2...fcf9b45                       |
| php-http/promise                      | 1cc44dc   | 02ee67f     | https://github.com/php-http/promise/compare/1cc44dc...02ee67f                       |
| psr/http-client                       | 496a823   | fd5d37a     | https://github.com/php-fig/http-client/compare/496a823...fd5d37a                    |
| psr/http-message                      | f6561bf   | efd67d1     | https://github.com/php-fig/http-message/compare/f6561bf...efd67d1                   |
| psr/log                               | c4421fc   | 0f73288     | https://github.com/php-fig/log/compare/c4421fc...0f73288                            |
| symfony/event-dispatcher              | 4.4.x-dev | d364824     | https://github.com/symfony/event-dispatcher/compare/4.4.x-dev...d364824             |
| symfony/event-dispatcher-contracts    | 6dd7d74   | 5a749bd     | https://github.com/symfony/event-dispatcher-contracts/compare/6dd7d74...5a749bd     |
| symfony/options-resolver              | 4.4.x-dev | 1cfd933     | https://github.com/symfony/options-resolver/compare/4.4.x-dev...1cfd933             |
| symfony/polyfill-php73                | 2ceb49e   | 0f27e9f     | https://github.com/symfony/polyfill-php73/compare/2ceb49e...0f27e9f                 |
| zetacomponents/console-tools          | 1.7       | 1.7.1       | https://github.com/zetacomponents/ConsoleTools/compare/1.7...1.7.1                  |
| zetacomponents/mail                   | 1.8.3     | 1.9.1       | https://github.com/zetacomponents/Mail/compare/1.8.3...1.9.1                        |
| asimlqt/php-google-spreadsheet-client | NEW       | v3.x-dev    |                                                                                     |
| easyrdf/easyrdf                       | NEW       | 8227c64     |                                                                                     |
| maxh/php-nominatim                    | NEW       | 7bd5fd7     |                                                                                     |
| ml/iri                                | NEW       | 1.1.4       |                                                                                     |
| ml/json-ld                            | NEW       | 1.1.0       |                                                                                     |
| opencontent/occhart-ls                | NEW       | 1.1         |                                                                                     |
| opencontent/occodicefiscale-ls        | NEW       | 542aa99     |                                                                                     |
| opencontent/oceasyontology-ls         | NEW       | 66ff27c     |                                                                                     |
| opencontent/oci18n                    | NEW       | 0f8551d     |                                                                                     |
| opencontent/ocinstaller               | NEW       | b0c3ec7     |                                                                                     |
| opencontent/ocwebhookserver-ls        | NEW       | 32df3cf     |                                                                                     |
| opencontent/openpa_userprofile-ls     | NEW       | 2e192b1     |                                                                                     |
| psr/cache                             | NEW       | b9aa2cd     |                                                                                     |
| psr/container                         | NEW       | fc1bc36     |                                                                                     |
| psr/event-dispatcher                  | NEW       | cfea31e     |                                                                                     |
| psr/simple-cache                      | NEW       | 5a7b96b     |                                                                                     |
| semsol/arc2                           | NEW       | 2.5         |                                                                                     |
| symfony/cache                         | NEW       | 4.4.x-dev   |                                                                                     |
| symfony/cache-contracts               | NEW       | 2e8a2f5     |                                                                                     |
| symfony/deprecation-contracts         | NEW       | ede224d     |                                                                                     |
| symfony/polyfill-ctype                | NEW       | 4719fa9     |                                                                                     |
| symfony/polyfill-intl-idn             | NEW       | 47bd6aa     |                                                                                     |
| symfony/polyfill-mbstring             | NEW       | 81ffd3a     |                                                                                     |
| symfony/polyfill-php72                | NEW       | 37b0976     |                                                                                     |
| symfony/polyfill-php80                | NEW       | 8854dc8     |                                                                                     |
| symfony/service-contracts             | NEW       | 13111af     |                                                                                     |
| symfony/var-exporter                  | NEW       | 681d63f     |                                                                                     |
| symfony/yaml                          | NEW       | 5f947e5     |                                                                                     |
| thingengineer/mysqli-database-class   | NEW       | v2.9.3      |                                                                                     |

Relevant changes by repository:

**ezsystems/ezmbpaex-ls changes between 5.3.3.1 and 5.3.3.3**
 - avoid fatal error when user draft is stored and ezaudit is enabled
 - Use eZUserOperationCollection in cahnge password module

**ezsystems/ezpublish-legacy changes between 19701b9 and 2020.1000.1**
 - Updated dbupdate scripts so they will no longer fail when there are multiple users with the same e-mail (#1445)
 - Merge branch '2019.03'
 - Fix instances of count() that would cause a warning in 7.2  Closes #1443
 - Merge branch '2019.03'
 - EZP-30834: remove strtotime function from the trashed-days option (#1441)
 - [Travis] Add testing for PHP 7.2 and 7.3 (#1446)  * [Travis] Add testing for PHP 7.2 and 7.3  * [Test] Make sure to run phpunit from local dir and not from project dir  * [PPH7.3] Fix issues found on PHP 7.3
 - Merge branch '2019.03'
 - Fixing search in media lib which used to loose context (#1433)
 - Merge branch '2019.03'
 - Update php7.md
 - Make autoloads ignore anonymous classes (#1448)
 - Fix transformURI() on ignoreIndexDir & ! htmlEscape (#1449)  * Fix transformURI() on ignoreIndexDir & ! htmlEscape  Fix of issue introduced in 07de12622320c4648dd03d20647ac012a1411d90 "Fix EZP-23086: Image thumbnail not shown on backend if alias contains quotes" when escaping was introduced.  * Update ezuri.php
 - Merge branch '2017.12' into 2019.03
 - Merge branch '2019.03'
 - Do not support literal HTML in the Administration Interface (#1408)
 - Fix notice when checking for anonymous  classes in autoload generator (#1450)
 - Merge branch '2019.03'
 - improve php 7 bc doc (#1452)
 - Show images after used url_prefix (#1453)  * Show images after used url_prefix * CS
 - Add OntoPiA pseudo locale ini
 - Add greek flag
 - EZP-31040: Remote Code Execution in file uploads
 - Merge branch '2017.12' into 2019.03
 - Fixed wrong old-style constructor usage
 - Removed invalid constructor call
 - Merge branch '2017.12' into 2019.03
 - Merge branch '2019.03'
 - Merge commit 'c49eef93f50c665a3d7a6b2aa6387ccd46e059f5' into temp  * commit 'c49eef93f50c665a3d7a6b2aa6387ccd46e059f5':   Removed invalid constructor call   Fixed wrong old-style constructor usage   EZP-31040: Remote Code Execution in file uploads   Show images after used url_prefix (#1453)   improve php 7 bc doc (#1452)   Fix notice when checking for anonymous  classes in autoload generator (#1450)   Do not support literal HTML in the Administration Interface (#1408)   Fix transformURI() on ignoreIndexDir & ! htmlEscape (#1449)   Make autoloads ignore anonymous classes (#1448)   Update php7.md   Fixing search in media lib which used to loose context (#1433)   [Travis] Add testing for PHP 7.2 and 7.3 (#1446)   EZP-30834: remove strtotime function from the trashed-days option (#1441)   Fix instances of count() that would cause a warning in 7.2   Updated dbupdate scripts so they will no longer fail when there are multiple users with the same e-mail (#1445)
 - Allow override ini settings from env variables
 - Allow override ini array or hash settings from env variables: strings EZINI_FILE__SECTION__VARIABLE: VALUE array or hash EZINI_FILE__SECTION__VARIABLE__KEY: VALUE

**opencontent/cjwnewsletter-ls changes between 3.0.2 and 3.0.4**
 - Fix typo in translation
 - Fix schema dba

**opencontent/ezpostgresqlcluster-ls changes between db456e4 and 1c50dd6**
 - Add ezpevent filters
 - Merge branch 'md5' into event_handler

**opencontent/ocbootstrap-ls changes between 60ca49d and 1.9.8**
 - Aggiunge un design per l'utilizzo di bootstrap v4, fontawesome e webpack
 - Merge pull request #3 from OpencontentCoop/version2  Utilizzo di bootstrap v4, fontawesome e webpack
 - Migliora l'usabilità per l'inserimento e la modifica delle password
 - Merge pull request #4 from OpencontentCoop/password_helper  Migliora l'usabilità per l'inserimento e la modifica delle password
 - Migliora l'usabilità per l'inserimento e la modifica delle password (bootstrap 4)
 - Nasconde gli attributi hidden in user/register
 - Corregge le stringhe di traduzione
 - bugfix
 - Imposta o corregge le stringhe traducibili
 - Corregge un bug su edit di evento ricorrente
 - Specifica la lingua corrente in user/edit, corregge la visualizzazione del template di edit del datatype ocgdpr in bootstrap4
 - Recepisce la funzionalità di ordinamento di file multipli in bootstrap4
 - Merge pull request #5 from OpencontentCoop/fix/multibinary_sort  Recepisce la funzionalità di ordinamento di file multipli in bootstrap4
 - Aggiunge il file di traduzione delle stringhe in greco
 - Corregge il file di traduzione delle stringhe in greco
 - Introduce la funzionalità dei moduli di login per cui è possibile aggiungere un modulo alla pagina /user/login da un'estensione terza
 - Merge pull request #6 from OpencontentCoop/feature/login_modules  Introduce la funzionalità del login modulare in base a configurazioni
 - Permette l'inserimento di testo formattato nei moduli di login
 - Recepisce gli aggiornamenti di ocevents
 - Merge pull request #7 from OpencontentCoop/on_update_ocevents  Recepisce gli aggiornamenti di ocevents
 - Corregge le traduzioni del modulo di cambio password
 - Corregge un bug sulle traduzioni di edit ocevents
 - Aggiorna le traduzioni in greco
 - Aggiorna le traduzioni in greco
 - Disabilita il drag and drop nell'edit di un attributo ezpage
 - Evita in warning in siteaccess di backend per override mancante

**opencontent/occsvimport-ls changes between 2.3.0 and 2.4.0**
 - Permette l'importazione di alberature di tag con traduzioni e sinonimi da Google Sheets

**opencontent/oceditorialstuff-ls changes between 2.2.2 and 2.4.2**
 - Aggiorna il file delle traduzioni
 - Merge pull request #4 from OpencontentCoop/translations  Aggiorna il file delle traduzioni
 - Aggiunge lo schema astratto del database
 - Corregge un errore sulla definizione dello schema db
 - Aggiunge il file di traduzione delle stringhe in greco
 - Corregge alcune stringhe di traduzione in greco
 - Aggiorna le traduzioni in greco

**opencontent/ocevents-ls changes between 1.1.0 and 1.1.9**
 - Corregge un problema legato all'indicizzazione di ocevents come subattribute
 - Merge pull request #23 from OpencontentCoop/fix_subattribute_index  Corregge un problema legato all'indicizzazione di ocevents come subattribute
 - Corregge alcuni bug minori
 - Merge pull request #24 from OpencontentCoop/bugfix  Corregge alcuni bug minori
 - Hotfix in recurrence  translator loader
 - Implementa fromString Verifica il popolamento se il campo è obbligatorio Corregge la visualizzazione di edit da backend Corregge alcuni bug di visualizzazione Impone anche DTEND in rrule.js
 - Merge pull request #25 from OpencontentCoop/feature_and_fix  Implementa fromString e corregge alcuni bug
 - Permette l'accesso senza policy per recurrence/parse
 - Fix opendata converter
 - Inserisce le traduzioni in greco
 - Aggiorna le traduzioni in greco

**opencontent/ocexportas-ls changes between 1.3.3 and 1.3.5**
 - Aggiorna exporter ANAC sulla base di http://www.anticorruzione.it/portal/public/classic/Servizi/ServiziOnline/DichiarazioneAdempLegge190
 - Merge pull request #1 from OpencontentCoop/fix_anac_exporter  Aggiorna exporter ANAC
 - Corregge l'esportazione ANAC dei raggruppamenti

**opencontent/ocgdprtools-ls changes between 1.2.1 and 1.4.5**
 - Introduce il connettore per ocopendataform
 - Rende traducibile il testo e i link dell'attributo a livello di classe (con retrocompatibilità) Da la possibilità di forzare l'annullamento dell'accettazione e costringe l'utente ad accettare al successivo login Logga su ezaudit
 - Merge pull request #3 from OpencontentCoop/evoluzione_privacy  https://www.wrike.com/open.htm?id=330639208
 - Bug fix on user acceptance
 - Fix conflict with openpa_userprofile
 - Corregge la visualizzazione del datatype in versione collectinfo
 - Corregge il connettore opendata_form per il caso in cui l'editor non sia l'utente corrente
 - Svuota la cache statica (varnish) al cambio di valore di accettazione (varnish mette in cache anche i 302)
 - Ignora i privilegi di accesso al modulo gdpr/user_acceptance

**opencontent/ocmaintenance-ls changes between 2.3.2 and 2.3.3**
 - check class object consistency
 - Corregge un bug per cui lo script check_consistency cancellava bozze valide

**opencontent/ocmap-ls changes between 1.2 and 1.3**
 - Avoid mixed contente error
 - Introduce il connettore per ocopendata_form

**opencontent/ocmultibinary-ls changes between 2.1 and 2.2.2**
 - Added sort feature (#4)  * Added sort feature * Fixed translations
 - Fix opendata converter
 - Permette il download se l'oggetto è in draft e l'utente corrente ne è il proprietario (per preview immagini)

**opencontent/ocopendata-ls changes between 2.21.3 and 2.24.1**
 - Corregge un bug nella API degli attributi eztags
 - Corregge un errore del payload builder
 - Corregge un problema nel risultato di una query delect-fields in caso di contenuti multilingua
 - Merge pull request #17 from OpencontentCoop/fix_tags_api  Corregge un bug nella API degli attributi eztags
 - Rende configurabile la lingua di fallback in javascript
 - Introduce un env clone di default che espone i permessi dell'utente corrente
 - Rimuove l'encoding delle query su richieste $.ajax
 - Introduce un nuovo style di autenticazione che utilizza eZUser::_loginUser di default
 - Introduce la ricerca cursor tramite eZFindExtendedAttributeFilterInterface
 - Considera più valori per il campo field nel filtro stato
 - Merge pull request #18 from OpencontentCoop/feature/cursor  Feature/cursor
 - Permette l'aggiornamento di ezuser senza errore
 - Previene fatal error in caso di cluster failure in section repository
 - Fix calling static method Base::validate non statically
 - Merge pull request #19 from OpencontentCoop/fix-strict-php  Fix calling static method Base::validate non statically
 - Add tag children pagination query parameters
 - Fix temp file creation in exportas paginated download
 - Hotfix in SearchGateway query with no limitations
 - Ottimizza la creazione di sinonimi e di traduzioni di tag via api
 - Aggiunge il remote id del main node all'Api Content Metadata
 - Permette la creazione e la modifica via api di attributi di tipo ezpage
 - Corregge un problema nel calcolo del nodo principale in Metadata
 - Merge branch 'ezpage_rest_field'  * ezpage_rest_field:   Permette la creazione e la modifica via api di attributi di tipo ezpage
 - Corregge lo svuotamento cache del Section repository

**opencontent/ocopendata_forms-ls changes between 50cee84 and 1.6.3**
 - Add ezoe gui in ezxml field
 - Merge pull request #4 from OpencontentCoop/feature/ezxml  Online editor field connector
 - Corregge un problema di caricamento asincrono nel caso in cui il sito sia caricato in un sottodominio
 - Corregge le stringhe di traduzione
 - Corregge un problema sull'aggiornamento di ezuser
 - Aggiunge il file di traduzione delle stringhe in greco
 - Corregge la visualizzazione delle relazioni in formato checkbox con un workaround per evitare un bug di alpacajs
 - Corregge alcuni piccoli bug di visualizzazione
 - Corregge alcune stringhe di traduzione in greco

**opencontent/ocrecaptcha-ls changes between 1.3.1 and 1.4**
 - Aggiunge un campo recaptcha al survey
 - Merge pull request #2 from OpencontentCoop/survey_fields  Aggiunge un campo recaptcha al survey

**opencontent/ocsearchtools-ls changes between 1.10.5 and 1.10.9**
 - Aggiunge lo schema astratto del database
 - Corregge alcuni potenziali problemi di sicurezza xss
 - Corregge l'indicizzazione della prima lettera della stringa e introduce un nuovo subattribute normalized utile per l'ordinamento alfabetico
 - Corregge le stringhe statiche e imposta le traduzioni
 - Merge pull request #10 from OpencontentCoop/translations  wip Corregge le stringhe statiche e imposta le traduzioni

**opencontent/openpa-ls changes between 7bcc76a and 5353d99**
 - fix per bi
 - Corregge alcuni potenziali problemi di sicurezza xss
 - Corregge un bug sull'api usage metrics
 - Fix create_instance script
 - add agenda in OpenPABase::getInstances
 - Evoluzione di robots.txt per bloccare i bad crawler
 - Aggiunge WhatsApp e Telegram tra i valori possibili dei contatti
 - Considera content_tag_menu nel calcolo del tree menu
 - Coregge un problema nella creazione dell'oranigramma #2874
 - In openpa/object viene considerato il main node
 - Aggiunge il codice SDI ai contatti
 - Aggiunge la possibilità di escludere alberature dai menu
 - Permette la configurazione del mittente email da applicazione
 - Rimuovo ruolo e ruolo2 da ContentMain/AbstractIdentifiers #1940
 - Considera la variabile d'ambiente EZ_INSTANCE per la definizione dell'identificativo dell'istanza corrente
 - Carica la versione del software in CreditsSettings::CodeVersion da file VERSION se presente
 - Corregge lo script di migrazione da nfs a s3
 - Rimuove codice inutilizzato o obsoleto
 - Nella configurazione cluster la cache di ocopendata viene salvata in locale invece che in redis
 - Aggiunge TikTok ai possibili contatti
 - Considera la variabile d'ambiente EZ_INSTANCE per la definizione dell'identificativo del siteaccess custom per evitare conflitti con i nomi dei moduli

**opencontent/openpa_bootstrapitalia-ls changes between 3658b86 and 8707ce1**
 - Aggiunge la possibilità di cambiare la palette di colori. Aggiunge i temi: cagliari, complementary-1, complementary-2, redpurple, turquoise
 - Forza la visualizzione dell'article/abstract a 160 caratteri
 - Corregge un problema di visualizzazione delle date dell'evento e un bug sulla fetch dei contenuti correlati a un argomento
 - Permette l'esportazione di un contenuto in formato json semplificato con i tag espressi in formato link a vocabolari controllati
 - In esportazione json nasconde i coampi vuoti
 - jquery.dataTables bootstrap 4 css
 - Formatta l'amministrazione trasparente e risolve alcuni problemi di usabilità
 - Inserisce la verisione del software nel footer
 - Merge branch 'dev'
 - Corregge alcuni problemi di astrazione del dominio ospitante
 - Corregge un problema di caricamento asincrono nel caso in cui il sito sia caricato in un sottodominio
 - Corregge un problema di caricamento asincrono nel caso in cui il sito sia caricato in un sottodominio
 - Corregge un problema di caricamento asincrono nel caso in cui il sito sia caricato in un sottodominio
 - fix
 - Evita un Fatal error negli attributi di tipo Relazioni inverse nel caso di classi temporanee
 - Rimuove il grafico errato sulle partecipazioni societarie (todo)
 - Nasconde il menu Tipologia di documento se non ci sono tag selezionati nelle impostazioni del blocco
 - Fix lodash dependency (CVE-2019-10744 https://github.com/lodash/lodash/pull/4336)
 - Aggiunge la gestione delle aree riservtaate
 - Corregge un problema di visualizzazione della websitetoolbar
 - Corregge un bug minore sul datatype openparestrictedarea
 - GEstisce lo zero come nullo per gli attributi ezinteger
 - Aggiuge la possibilità di associare gruppi alle aree riservate
 - Formatta l'area riservata
 - corregge il link ai cookie, nasconde le funzioni di stampa (todo)
 - Aggiorna la palette del tema turquoise
 - Corregge la versione dell'imamgine principale
 - Corregge la variazione delle imamgini nelle card (da medium a large)
 - Corregge la variazione delle immagini nei banner (da medium a large)
 - Corregge il tsto del readmore per i banner
 - Corregge un problema di visualizzazione delle icone di topic card children
 - Corregge un problema sul css sections
 - Corregge la visualizzazione dell'imamgine principale in base alla dimensione
 - Corregge la visualizzazione dell'immagine del singolo default
 -  Corregge la visualizzazione dell'immagine del singolo default
 - Revert "Corregge la variazione delle immagini nei banner (da medium a large)"  This reverts commit e623a3137795edb79727a6e506762529c2e3818a.
 - Merge branch 'dev' of https://github.com/OpencontentCoop/openpa_bootstrapitalia into dev
 - Corregge un bug is visuluazzazione delle card embed
 - Impone un limite di elementi visibili nel side menu
 - Redesign dei riusltati del motore di ricerca
 - Corregge un bug di visualizzazione del menu laterale
 - Corregge un bug di visualizzazione del motore di ricerca
 - Corregge un bug di visualizzazione del motore di ricerca
 - Corregge un bug nel menu laterale
 - Corregge una regressione sulla visualizzazione delle card teaser
 - Aumenta la compressione dei file css prodotti da gulp-saas
 - Corregge un bug per cui veniva mostrata la mappa osm nelle card teaser
 - Corregge la visualizzazione deella matrice degliorari nel card_teaser con immagine
 - Merge branch 'dev' of https://github.com/OpencontentCoop/openpa_bootstrapitalia into dev
 - Aggiorna bootstrapitalia a 1.3.5 Rimuove i temi complemetary* e redpurple Crea il tema trento basandosi su https://sportello.comune.trento.it/ (permane il problema della creazione di un nuovo tema a partire da un colore ed è necessario modificare la dipendenza)
 - Corregge un problema di overflow nelle card-teaser con icona
 - Corregge la visualizzazione dei servizi correlati se essi non hanno una data di scadenza impostataÂ
 - Valorizza i link nei contatti
 - Non visualizza la riga della matrice dei link se non popolata
 - Imposta come gratuito un costo pari a zero
 - Corregge un problema di overflow nelle card-teaser
 - Aggiunge lo schema standard della tabella custom
 - Introduce la visualizzazione del menu virtualizzato per tag Imposta una visualizzazione di default per i topic Corregge il form connector per ezurl Introduce un filtro tag per i blocchi lista automatica e lista paginata Corregge la visualizzazione della matrice dei costi Migliora il selettore di campo in edit
 - Nasconde il titolo del blocco se non produce contenuti
 - Corregge un bug di configurazione del default topic
 - Customizza l'handler per i blocco ListaManuale
 - Rimuove il plugin js di bootstrapitalia password-meter (e usa quello presente in ocbootstrap)
 - Corregge la visualizzazione dello stato del servizio
 - Corregge la visualizzazione delle coperture temporali dei servizi correlati
 - Corregge la visualizzazione delle coperture temporali dei servizi correlati
 - Corregge la visualizzazione delle coperture temporali dei servizi correlati
 - Imposta il menu di amministrazione trasparenza solo alle pagina_trasparenza
 - Corregge il link dei ruoli nelle tabelle dell'amminsitrazione trasparente
 - Permette la visualizzazione in mappa di sotto-attributi di tipo ezgmaplocation
 - Corregge alcuni bug minori
 - Migliora la visualizzazione del diagramma delle relazioni
 - Permette allo sviluppatore di mostrare tutti gli attributi (non hidden) senza configurare gli extraparameters Mostra il bottone di creazione se l'utente ne ha effettivamente il permesso Corregge le stringhe di traduzione
 - Imposta le stringhe di traduzione per i template del pagelayout
 - Corregge un bug del javascript search gui
 - Redirige l'utente a user/edit dopo il self edit
 - Formtta l'attributo average_processing_time, corregge la navigazione virtualizzata su tag, corregge la matrice dei costi, corregge la visualizzazione inline degli orari negli embed
 - Corregge la profondità della fetch per la visualizzazione a tag
 - Permette di configurare l'ordinamento delle tabelle trasparenza con le regole di rappresentazione  [parent:$nodeId|][filters:$queryFilters|][group_by:$identifier|][order_by:+$attribute[,-$attribute,...]|]$class|$attribute[,$attribute,...]|$depth
 - Ripristina il bottone Conferma nell'interfaccia di ricerca di sezione
 - Corregge la posizione dell'immagine nella vista banner
 - Merge branch 'master' of https://github.com/OpencontentCoop/openpa_bootstrapitalia
 - Massimizza la larghezza dell'immagine nella vista banner
 - Merge branch 'master' of https://github.com/OpencontentCoop/openpa_bootstrapitalia
 - Sostituisce l'alias delle immagini delle card con uno più grande (da large a imagelargeoverlay)
 - Formatta frontpage come pagina_sito, uniforma visualizzazini published, modified, reading time
 - Aggiunge copy Designers Italia
 - Visualizza il campo interroganti in blocco ricerca_documenti Aggiunge la visualizzazione di default per user_group Corregge le impostazioni e gli handler per la pubblicazione in dati.trentino.it
 - Aggiornamento bootstrap-italia a 1.3.8
 - Mostra le competenze e le deleghe legate al ruolo nel full di Dipendente e Politico
 - Impone la stessa altezza alla vista lista_banner
 - Aggiunge il blocco HTML
 - Migliora la visualizzazione della galleria immagini
 - Introduce lo skin per la newsletter e customizza i template di gestione newsletter
 - Add dynamic service url on home attribute service_url
 - Aggiunge il file di traduzione delle stringhe in greco
 - Corregge il file di traduzione delle stringhe in greco
 - Corregge una traduzione mancante
 - Aumenta il limite massimo di ricerca in opendata content env per permettere il corretto funzionamento dell'interfaccia di openpa role
 - Evita un possibile errore in indicizzazione dei sottoattributi geo
 - Aggiunti temi amaranto e mare (#1)
 - add theme elegance rustico olanda acquamarina (#2)  * add theme amaranto  * add amaranto theme  * add mare theme  * remove unecessary comment  * update amaranto theme  * add elegance theme  * update amaranto  * update elegance  * add rustico theme for mocheni  * add olanda theme  * update olanda  * add acquamarina theme  * update olanda  * update acquamarina  * update elegance
 - Utilizza gli elementi html5 audio e video invece del flash player
 - change color to a lighter version
 - Merge pull request #3 from OpencontentCoop/new_olanda  Schiarito il colore del tema Olanda
 - Possibilità di mostrare l'icona nel tempalte card di default tramite extra parameters Fix minori sui css
 - Hot fix link telegram in header social
 - Mostra in website toolbar i link di easyontology qualora presenti
 - Aggiorna le traduzioni in greco
 - Corregge la paginazione in openpa/roles
 - Corregge alcuni problemi di traduzione
 - Inserisce la traduzione delle colonne della matrice di opening_hours
 - Inserisce il connettore custom per la matrice di opening_hours
 - Corregge un fatal error in OpenPABootstrapItaliaImageUploadHandler
 - Corregge le visualizzazioni di una pagina che virtualizza il menu sui tag
 - Aggiorna le traduzioni in greco
 - Corregge un bug nel blocco lista per cui non veniva correttamente calcolata la profondità dei contenuti nell'alberatura
 - Migliora la visualizzazione da mobile dei factbox
 - Permette all'utente loggato di raggiungere la singola immagine da una galleria
 - Aggiunge il blocco per esporre un fullcalendar remoto
 - Corregge la visualizzazione dei tag nella colonna destra del full
 - Corregge la visualizzazione dei tag nel formato chip link
 - Corregge le dimensioni degli image-alias per le card
 - Visualizza il codice SDI nel footer
 - Calcola i colori dello skin della newsletter in base allo sfondo della testata e del footer e non in base al colore primario
 - Inserisce un alias di immagine con risoluzione maggiore se l'ingombro è di due colonne
 - Hotfix in inserisce un alias di immagine con risoluzione maggiore
 - Corregge un bug nei blocchi di lista automatica per cui veniva visualizzato anche il contenitore nonostante fosse specificata la profondità
 - Visualizza correttamente il titolo della pagina trasparenza
 - Add spec blocco eventi remoti
 - Corregge un bug nell'operatore che legge il css per estrarne il colore primario
 - Visualizza l'anteprima delle immagini nell'interfaccia di inserimento relazioni
 - Espone i metatag secondo lo standard di opengraph
 - Hotfix della chiave meta di opengraph
 - Aggiorna bootstrap-italia alla versione 1.3.10 Corregge un bug nella visualizzazione del blocco sovrapposto Aggiunge documentazione su creazione tema e utilizzo del blocco sovrapposto
 - Comprime i file javascript inclusi Corregge un bug html in footer/copyright Visualizza le cartelle in trasparenza
 - Corregge la visualizzazione di default dei topics
 - Espone il contenuto in formato jsonld nell'html full
 - Corregge un problema nell'index plugin di has_code
 - Rimuove ezflip e ngpush dalla websitetoolbar
 - Corregge un problema per cui l'upload di immagini tramite drag and drop duplicava i contenuti
 - Corregge un bug di indicizzazione nel mototre di ricerca
 - Aggiunge bookmark, rss e trash alla websitetoolbar
 - Aggiunge le librerie e i template di default per le dashboard di editorialstuff Migliora l'interfaccia di content/dashboard
 - Aggiunge TikTok ai possibili contatti
 - Gestisce la visualizzazione del video nei blocchi oggetto singolo e card alternativa
 - Corregge un conflitto css nel wrapper di video in iframe
 - Corregge un bug di visualizzazione delle immagini nei blocchi
 - Corregge un bug di visualizzazione delle immagini nei blocchi di tipo children
 - Permette di configurare una dashboard sul modulo join/as per aprire la registrazione in classi diverse da user
 - Introduce un’interfaccia per l’assegnazione dei ruoli redazionali
 - Merge branch 'master' into permission  * master:   Permette di configurare una dashboard sul modulo join/as per aprire la registrazione in classi diverse da user   Corregge un bug di visualizzazione delle immagini nei blocchi di tipo children
 - Corregge un bug nell'attivazione dell'interfaccia di ricerca
 - Corregge il link al motore di ricerca nell'header

**opencontent/openpa_newsletter-ls changes between 2.6.6 and 2.8.1**
 - Aggiunge un blocco per iscrizione newsletter
 - Add bootstrapitalia custom templates
 - Fix bi templates

## [1.0.1] - 2019-08-31

- Changed publicode with better description
- Fixed spid flag

## [1.0.0] - 2019-08-30

- First public release
