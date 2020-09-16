<?php /* #?ini charset="utf-8"?

[DatabaseSettings]
DatabaseImplementation=ezpostgresql
Server=postgres
Port=
User=
Password=
Database=
Charset=utf-8
Socket=disabled
SQLOutput=disabled

[FileSettings]
VarDir=

[SiteSettings]
SiteName=
SiteURL=
DefaultAccess=frontend
SiteList[]
SiteList[]=frontend
SiteList[]=debug
SiteList[]=backend

[HTTPHeaderSettings]
CustomHeader=enabled
OnlyForAnonymous=disabled
OnlyForContent=enabled
Cache-Control[]
Cache-Control[/]=public, must-revalidate, max-age=259200, s-maxage=259200
HeaderList[]=Vary
Vary[/]=X-User-Context-Hash

[VarnishSettings]
VarnishHostName=
VarnishPort=
VarnishServers[]

[SearchSettings]
LogSearchStats=disabled

[RoleSettings]
PolicyOmitList[]=user/login
PolicyOmitList[]=user/logout
PolicyOmitList[]=user/do_logout
PolicyOmitList[]=user/activate
PolicyOmitList[]=user/success
PolicyOmitList[]=user/forgotpassword
PolicyOmitList[]=layout
PolicyOmitList[]=switchlanguage
PolicyOmitList[]=ezjscore/call
PolicyOmitList[]=openpa/classdefinition
PolicyOmitList[]=openpa/calendar
PolicyOmitList[]=openpa/object
PolicyOmitList[]=openpa/data
PolicyOmitList[]=robots.txt
PolicyOmitList[]=openpa/cookie
PolicyOmitList[]=feed/rss
PolicyOmitList[]=feed/list
PolicyOmitList[]=exportas/csv
PolicyOmitList[]=exportas/xml
PolicyOmitList[]=exportas/custom
PolicyOmitList[]=ezinfo/is_alive
PolicyOmitList[]=newsletter/configure
PolicyOmitList[]=newsletter/archive
PolicyOmitList[]=userpaex/password
PolicyOmitList[]=userpaex/forgotpassword
PolicyOmitList[]=opendata/api
PolicyOmitList[]=opendata/console
PolicyOmitList[]=opendata/analyzer
PolicyOmitList[]=opendata/help
PolicyOmitList[]=recurrence/parse
PolicyOmitList[]=_fos_user_context_hash

[Session]
SessionNameHandler=custom
CookieSecure=true
CookieHttponly=true
Handler=ezpSessionHandlerPHP
ForceStart=disabled

[SiteAccessSettings]
RemoveSiteAccessIfDefaultAccess=enabled
ForceVirtualHost=true
DebugAccess=enabled
CheckValidity=false
MatchOrder=uri
HostMatchMapItems[]
RelatedSiteAccessList[]
RelatedSiteAccessList[]=frontend
RelatedSiteAccessList[]=debug
RelatedSiteAccessList[]=backend
AvailableSiteAccessList[]
AvailableSiteAccessList[]=backend
AvailableSiteAccessList[]=debug
AvailableSiteAccessList[]=frontend

[MailSettings]
TransportAlias[smtp]=OpenPASMTPTransport
Transport=smtp
TransportConnectionType=tls
TransportServer=
TransportPort=
TransportUser=
TransportPassword=
AdminEmail=
EmailSender=
SenderHost=
BlackListEmailDomains[]
BlackListEmailDomainSuffixes[]

[InformationCollectionSettings]
EmailReceiver=

[UserSettings]
LogoutRedirect=/?logout
RegistrationEmail=

[TimeZoneSettings]
TimeZone=Europe/Rome

[RegionalSettings]
TextTranslation=enabled
TranslationExtensions[]=cjw_newsletter

[DebugSettings]
DebugToolbar=disabled

[UserFormToken]
CookieHttponly=true
CookieSecure=0

[SiteAccessRules]
Rules[]
Rules[]=access;enable
Rules[]=moduleall
Rules[]=access;disable
Rules[]=module;ezinfo/about
Rules[]=module;setup/extensions
Rules[]=module;content/tipafriend
Rules[]=module;settings/edit
Rules[]=module;user/register

[Event]
Listeners[]=content/download@OpenPADownloadFilter::addXRobotsTagHeader


*/ ?>
