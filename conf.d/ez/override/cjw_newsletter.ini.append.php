<?php /*#?ini charset="utf-8"?
# cjw_newsletter.ini contains settings for the newsletter

[NewsletterSettings]
RecaptchaHandler=OpenPARecaptcha
PhpCli=php
AvailableSkinArray[]
AvailableSkinArray[]=openpa
AvailableSkinArray[]=entilocali
AvailableClasses[]=avviso
AvailableClasses[]=event
AvailableClasses[]=comunicato_stampa
AvailableClasses[]=pubblicazione
AvailableClasses[]=cjw_newsletter_article
AvailableTitleFields[]=title
AvailableDescriptionFields[]=intro
AvailableDescriptionFields[]=abstract
AvailableDescriptionFields[]=short_description

[NewsletterMailSettings]
TransportMethodCronjob=file
TransportMethodPreview=file
TransportMethodDirectly=file
FileTransportMailDir=var/log/mail
HeaderLineEnding=auto
ImageInclude=disabled
EmailSenderName=Impostazioni Newsletter
EmailSender=no-reply@opencontent.it

[BounceSettings]
BounceThresholdValue=3

[DebugSettings]
Debug=enabled

[NewsletterUserSettings]
UseTplForNameGeneration=disabled
SalutationMappingArray[value_1]=Sig
SalutationMappingArray[value_2]=Sig.ra

*/ ?>
