<?php /*

[CreateSettings]
MimeClassMap[application/pdf]=file
MimeClassMap[application/x-pdf]=file

#azzerato per evitare i problemi di upload di file doc o simili di ezodf
MimeUploadHandlerMap[]
MimeUploadHandlerMap[application/zip]=ezzipuploadhandler

[file_ClassSettings]
FileAttribute=file
NameAttribute=name
NamePattern=<original_filename_base>

*/ ?>
