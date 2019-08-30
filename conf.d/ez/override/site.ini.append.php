<?php /* #?ini charset="utf-8"?

[ExpiryHandler]
ExpiryFilePerSiteAccess=enabled

[HTTPHeaderSettings]
CustomHeader=disabled
OnlyForAnonymous=disabled
OnlyForContent=enabled
Cache-Control[]
Cache-Control[/]=public, must-revalidate, max-age=259200, s-maxage=259200
HeaderList[]=Vary
Vary[/]=X-User-Context-Hash

[VarnishSettings]
VarnishServers[]
VarnishServers[]=127.0.0.1:80

[SearchSettings]
LogSearchStats=disabled

[ExtensionSettings]
ActiveExtensions[]=ocbinarynullparser
ActiveExtensions[]=ocmultibinary
ActiveExtensions[]=mugoobjectrelations
ActiveExtensions[]=ocoperatorscollection
ActiveExtensions[]=easyvocs_connector
ActiveExtensions[]=ocsupport
ActiveExtensions[]=ezuserformtoken
ActiveExtensions[]=ocgdprtools
ActiveExtensions[]=ezmbpaex
ActiveExtensions[]=ocevents
ActiveExtensions[]=ocfoshttpcache
ActiveExtensions[]=ocrolestools

[DatabaseSettings]
Charset=utf-8

[RoleSettings]
PolicyOmitList[]=user/login
PolicyOmitList[]=user/logout
PolicyOmitList[]=user/do_logout
PolicyOmitList[]=user/register
PolicyOmitList[]=user/activate
PolicyOmitList[]=user/success
PolicyOmitList[]=user/forgotpassword
PolicyOmitList[]=layout
PolicyOmitList[]=paypal/notify_url
PolicyOmitList[]=switchlanguage
PolicyOmitList[]=oauth/authorize
PolicyOmitList[]=odf/upload_import
PolicyOmitList[]=odf/authenticate
PolicyOmitList[]=odf/upload_export
PolicyOmitList[]=odf/ezodf_oo_client
PolicyOmitList[]=ezjscore/hello
PolicyOmitList[]=ezjscore/call
PolicyOmitList[]=openpa/classdefinition
PolicyOmitList[]=openpa/calendar
PolicyOmitList[]=openpa/object
PolicyOmitList[]=openpa/data
PolicyOmitList[]=robots.txt
PolicyOmitList[]=survey_user/verify
PolicyOmitList[]=comuneintasca/data
PolicyOmitList[]=openpa/signup
PolicyOmitList[]=openpa/cookie
PolicyOmitList[]=openpa/activate
PolicyOmitList[]=robots.txt
PolicyOmitList[]=survey_user/verify
PolicyOmitList[]=comuneintasca/data
PolicyOmitList[]=feed/rss
PolicyOmitList[]=feed/list
PolicyOmitList[]=exportas/csv
PolicyOmitList[]=exportas/xml
PolicyOmitList[]=exportas/custom
PolicyOmitList[]=sensor/alert
PolicyOmitList[]=ezinfo/is_alive
PolicyOmitList[]=flip/get
PolicyOmitList[]=nxc_captcha/get
PolicyOmitList[]=newsletter/configure
PolicyOmitList[]=newsletter/archive
PolicyOmitList[]=userpaex/password
PolicyOmitList[]=userpaex/forgotpassword
PolicyOmitList[]=opendata/api

[Session]
SessionNameHandler=custom
CookieSecure=false
CookieHttponly=true
Handler=ezpSessionHandlerPHP
ForceStart=disabled

[SiteSettings]
GlobalSiteURL=saasopenpa.opencontent.it
GlobalSiteName=OpenContent OpenPA
GlobalSiteRootNodeID=2
SiteList[]=bootstrapitalia_backend
SiteList[]=bootstrapitalia_debug
SiteList[]=bootstrapitalia_frontend

[UserSettings]
LogoutRedirect=/?logout
HashType=md5_user

[SiteAccessSettings]
ForceVirtualHost=true
DebugAccess=enabled
CheckValidity=false
MatchOrder=host_uri
AvailableSiteAccessList[]=bootstrapitalia_backend
AvailableSiteAccessList[]=bootstrapitalia_debug
AvailableSiteAccessList[]=bootstrapitalia_frontend
HostUriMatchMapItems[]=opencity.localtest.me;backend;bootstrapitalia_backend
HostUriMatchMapItems[]=opencity.localtest.me;debug;bootstrapitalia_debug
HostUriMatchMapItems[]=opencity.localtest.me;;bootstrapitalia_frontend

[MailSettings]
Transport=SMTP
TransportServer=mailhog
TransportPort=1025
AdminEmail=webmaster@opencontent.it
EmailSender=no-reply@opencontent.it
SenderHost=opencity.localtest.me
BlackListEmailDomains[]
BlackListEmailDomainSuffixes[]

[EmbedViewModeSettings]
AvailableViewModes[]=embed
AvailableViewModes[]=embed-inline
InlineViewModes[]=embed-inline

[TimeZoneSettings]
TimeZone=Europe/Rome

[RegionalSettings]
Locale=ita-IT
TextTranslation=enabled
TranslationExtensions[]=cjw_newsletter

[ContentSettings]
ContentObjectNameLimit=203
TranslationList=

[DebugSettings]
DebugToolbar=disabled

[UserFormToken]
CookieHttponly=true
CookieSecure=0
*/ ?>
