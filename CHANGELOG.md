# Changelog

All notable changes to this project will be documented in this file.

This project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

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