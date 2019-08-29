<?php /* #?ini charset="utf-8"?

[ExtensionSettings]
ActiveAccessExtensions[]=ezflow
ActiveAccessExtensions[]=ezgmaplocation
ActiveAccessExtensions[]=ezjscore
ActiveAccessExtensions[]=ezmultiupload
ActiveAccessExtensions[]=ezodf
ActiveAccessExtensions[]=ezoe
ActiveAccessExtensions[]=ezwt
ActiveAccessExtensions[]=ocmaintenance
ActiveAccessExtensions[]=occsvimport
ActiveAccessExtensions[]=openpa_importers
ActiveAccessExtensions[]=sqliimport
ActiveAccessExtensions[]=ocinigui
ActiveAccessExtensions[]=openpa
ActiveAccessExtensions[]=ezflowplayer
ActiveAccessExtensions[]=ezfind
ActiveAccessExtensions[]=ocsearchtools
ActiveAccessExtensions[]=ezflip
ActiveAccessExtensions[]=occhangeobjectdate
ActiveAccessExtensions[]=ocmediaplayer
ActiveAccessExtensions[]=jcremoteid
ActiveAccessExtensions[]=ggwebservices
ActiveAccessExtensions[]=batchtool
ActiveAccessExtensions[]=ocmap
ActiveAccessExtensions[]=ocmaps
ActiveAccessExtensions[]=ezprestapiprovider
ActiveAccessExtensions[]=ocopendata
ActiveAccessExtensions[]=ocexportas
ActiveAccessExtensions[]=ezchangeclass
ActiveAccessExtensions[]=ezclasslists
ActiveAccessExtensions[]=collectexport
ActiveAccessExtensions[]=eztags
ActiveAccessExtensions[]=ocextensionsorder
ActiveAccessExtensions[]=bcgooglesitemaps
ActiveAccessExtensions[]=ocembed
ActiveAccessExtensions[]=bfsurveyfile
ActiveAccessExtensions[]=mugosurvey_addons
ActiveAccessExtensions[]=ezsurvey
ActiveAccessExtensions[]=ezstarrating
ActiveAccessExtensions[]=enhancedezbinaryfile
ActiveAccessExtensions[]=ocrss
ActiveAccessExtensions[]=ocrecaptcha
ActiveAccessExtensions[]=occhangeloginname
ActiveAccessExtensions[]=openpa_sensor
ActiveAccessExtensions[]=ocbootstrap
ActiveAccessExtensions[]=cjw_newsletter
ActiveAccessExtensions[]=openpa_newsletter
ActiveAccessExtensions[]=openpa_bootstrapitalia
ActiveAccessExtensions[]=ocopendata_forms
ActiveAccessExtensions[]=ocoperatorscollection

[DatabaseSettings]
DatabaseImplementation=ezpostgresql
Server=postgres
Port=
User=openpa
Password=openp4ssword
Database=openpa_prototipo
Charset=utf-8
Socket=disabled
SQLOutput=disabled

[Session]
SessionNamePerSiteAccess=disabled

[SiteSettings]
SiteName=OpenCity
SiteURL=opencity.localtest.me
LoginPage=embedded

[SiteAccessSettings]
RequireUserLogin=false
ShowHiddenNodes=false
RelatedSiteAccessList[]
RelatedSiteAccessList[]=bootstrapitalia_frontend
RelatedSiteAccessList[]=bootstrapitalia_backend

[DesignSettings]
SiteDesign=bootstrapitalia
AdditionalSiteDesignList[]
AdditionalSiteDesignList[]=ocbootstrap4
AdditionalSiteDesignList[]=ocbootstrap
AdditionalSiteDesignList[]=standard

[RegionalSettings]
Locale=ita-IT
ContentObjectLocale=ita-IT
ShowUntranslatedObjects=disabled
SiteLanguageList[]
SiteLanguageList[]=ita-IT
SiteLanguageList[]=eng-GB
SiteLanguageList[]=ger-DE
TextTranslation=enabled
TranslationSA[ita]=Ita

[FileSettings]
VarDir=var/bootstrapitalia

[MailSettings]
AdminEmail=webmaster@opencontent.it
EmailSender=

[InformationCollectionSettings]
EmailReceiver=

[UserSettings]
RegistrationEmail=

[ContentSettings]
TranslationList=

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

#################
##### DEBUG #####
#################
 
[MailSettings]
Transport=file

[ContentSettings]
ViewCaching=disabled

[DebugSettings]
DebugOutput=enabled
DebugRedirection=disabled
AlwaysLog[]=warning
AlwaysLog[]=debug
AlwaysLog[]=notice
AlwaysLog[]=strict

[TemplateSettings]
DevelopmentMode=enabled
Debug=disabled
ShowXHTMLCode=enabled
TemplateCache=disabled
TemplateCompile=disabled
ShowUsedTemplates=enabled

[OverrideSettings]
Cache=disabled

[DesignSettings]
DesignLocationCache=disabled

*/ ?>
