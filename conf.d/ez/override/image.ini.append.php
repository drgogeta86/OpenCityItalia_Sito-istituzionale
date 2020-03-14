<?php /* #?ini charset="utf-8"?

[ImageMagick]
IsEnabled=true
ExecutablePath=/usr/bin
Executable=convert
Filters[]=strippaexif=-strip
Filters[]=customquality=-quality %1
Filters[]=thumb=-resize 'x%1' -resize '%1x<' -resize 50%
Filters[]=centerimg=-gravity center -crop %1x%2+0+0 +repage
Filters[]=strip=-strip
Filters[]=sharpen=-sharpen 0.5
Filters[]=geometry/scalemin=-geometry %1x%2^
Filters[]=forcecenter=-background %1 -gravity center -extent %2x%3
Filters[]=roundcenterimg=-gravity center -crop %1x%2+0+0 +repage
Filters[]=roundmask=extension/openpa_theme_2014/design/standard/images/round-mask.png -composite
Filters[]=roundtrans=-transparent White

[MIMETypeSettings]
# Set JPEG quality from 0 (worst quality, smallest file) to 100 (best quality, biggest file)
Quality[]=image/jpeg;70

[AliasSettings]
AliasList[]
AliasList[]=reference
AliasList[]=small
AliasList[]=medium
AliasList[]=listitem
AliasList[]=articleimage
AliasList[]=articlethumbnail
AliasList[]=galleryline
AliasList[]=large
AliasList[]=rss
AliasList[]=logo
AliasList[]=icon
AliasList[]=infoboximage
AliasList[]=billboard
AliasList[]=imagelarge
AliasList[]=imagelargeoverlay
AliasList[]=gallerythumbnail
AliasList[]=newsletter_header
AliasList[]=newsletter_content
AliasList[]=header_banner
AliasList[]=header_logo
AliasList[]=header_only_logo
AliasList[]=marker
AliasList[]=carousel
AliasList[]=squaremini
AliasList[]=squarethumb
AliasList[]=squaremedium
AliasList[]=imagefull
AliasList[]=imagefullwide
AliasList[]=imagefull_cutwide
AliasList[]=widethumb
AliasList[]=widemedium
AliasList[]=opengraph


[original]
Filters[]

[reference]
Filters[]
Filters[]=geometry/scaledownonly=1170;1170
Filters[]=strippaexif
Filters[]=customquality=75

[header_banner]
Reference=reference
Filters[]
Filters[]=geometry/scalewidthdownonly=1000
Filters[]=centerimg=1000;200

[header_logo]
Reference=reference
Filters[]
Filters[]=geometry/scalewidthdownonly=1000

[header_only_logo]
Reference=reference
Filters[]
Filters[]=geometry/scale=260;60

[newsletter_header]
Reference=reference
Filters[]
Filters[]=geometry/scale=150;80

[newsletter_content]
Reference=reference
Filters[]
Filters[]=geometry/scaledownonly=130;130

[small]
Reference=reference
Filters[]
Filters[]=geometry/scaledownonly=100;160

[medium]
Reference=reference
Filters[]
Filters[]=geometry/scaledownonly=200;290

[large]
Reference=reference
Filters[]
Filters[]=geometry/scaledownonly=360;440

[rss]
Reference=reference
Filters[]
Filters[]=geometry/scale=88;31

[logo]
Reference=reference
Filters[]
Filters[]=geometry/scaleheight=36

[listitem]
Reference=reference
Filters[]
Filters[]=geometry/scaledownonly=130;190

[articleimage]
Reference=reference
Filters[]
Filters[]=geometry/scaledownonly=170;350

[articlethumbnail]
Reference=reference
Filters[]
Filters[]=geometry/scaledownonly=70;150

[galleryline]
Reference=reference
Filters[]
Filters[]=geometry/scaledownonly=70;150

[infoboximage]
Reference=reference
Filters[]
Filters[]=geometry/scalewidth=75

[billboard]
Reference=reference
Filters[]
Filters[]=geometry/scalewidth=764

[gallerythumbnail]
Reference=reference
Filters[]
Filters[]=geometry/scaledownonly=230;180

[imagelarge]
Reference=reference
Filters[]
Filters[]=geometry/scaledownonly=448;622

[imagelargeoverlay]
Reference=reference
Filters[]
Filters[]=geometry/scaledownonly=800;600

[carousel]
Reference=reference
Filters[]
Filters[]=geometry/scalewidth=1200
Filters[]=centerimg=1200;800

[squaremini]
Reference=reference
Filters[]
Filters[]=geometry/scalewidthdownonly=100
Filters[]=centerimg=50;50

[squarethumb]
Reference=reference
Filters[]
Filters[]=geometry/scalewidthdownonly=300
Filters[]=centerimg=150;150

[squaremedium]
Reference=reference
Filters[]
Filters[]=geometry/scalewidthdownonly=250
Filters[]=centerimg=250;250

[imagefull]
Reference=reference
Filters[]
Filters[]=geometry/scalewidthdownonly=850

[imagefullwide]
Reference=reference
Filters[]
Filters[]=geometry/scalewidthdownonly=1170

[imagefull_cutwide]
Reference=reference
Filters[]
Filters[]=geometry/scalewidthdownonly=850
Filters[]=centerimg=850;380

[widemedium]
Reference=reference
Filters[]
Filters[]=geometry/scaleheight=250
Filters[]=geometry/forcecenter=#ffffff;400;250

[widethumb]
Reference=reference
Filters[]
Filters[]=geometry/scalewidthdownonly=300
Filters[]=geometry/forcecenter=#ffffff;300;180

[marker]
Reference=
Filters[]
Filters[]=geometry/scale=30;30

[opengraph]
Reference=reference
Filters[]
Filters[]=geometry/scale=400;400
*/ ?>
