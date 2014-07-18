<?php /* #?ini charset="utf8"?

[General]
ExportableDatatypes[]
ExportableDatatypes[]=ezboolean
ExportableDatatypes[]=eztext
ExportableDatatypes[]=ezinteger
ExportableDatatypes[]=ezstring
#ExportableDatatypes[]=eztime
ExportableDatatypes[]=ezurl
ExportableDatatypes[]=ezuser
ExportableDatatypes[]=ezxmltext
#ExportableDatatypes[]=ezboolean
ExportableDatatypes[]=ezdate
#ExportableDatatypes[]=ezdatetime
ExportableDatatypes[]=ezemail
ExportableDatatypes[]=ezfloat
ExportableDatatypes[]=ezidentifier
ExportableDatatypes[]=ezenhancedobjectrelation
ExportableDatatypes[]=ezenhancedselection
ExportableDatatypes[]=ezselection
ExportableDatatypes[]=ezenum
ExportableDatatypes[]=ezcountry
ExportableDatatypes[]=ezimage
ExportableDatatypes[]=ezmedia
ExportableDatatypes[]=ezbinaryfile
ExportableDatatypes[]=ezmatrix
ExportableDatatypes[]=ezobjectrelationlist
ExportableDatatypes[]=hmregexpline
ExportableDatatypes[]=ezprice
StripURLText=true

# you can place the handler files in your extension
# just enter the full path to the handler

[ezstring]
HandlerFile=extension/xrowextract/classes/parsers/ezstringhandler.php
HandlerClass=eZStringHandler

[ezenhancedselection]
HandlerFile=extension/xrowextract/classes/parsers/ezstringhandler.php
HandlerClass=eZStringHandler

[ezinteger]
HandlerFile=extension/xrowextract/classes/parsers/ezintegerhandler.php
HandlerClass=eZIntegerHandler

[ezxmltext]
HandlerFile=extension/xrowextract/classes/parsers/ezxmltexthandler.php
HandlerClass=eZXMLTextHandler

[ezidentifier]
HandlerFile=extension/xrowextract/classes/parsers/ezidentifierhandler.php
HandlerClass=eZIdentifierHandler

[ezfloat]
HandlerFile=extension/xrowextract/classes/parsers/ezfloathandler.php
HandlerClass=eZFloatHandler

[ezemail]
HandlerFile=extension/xrowextract/classes/parsers/ezemailhandler.php
HandlerClass=eZEmailHandler

[ezurl]
HandlerFile=extension/xrowextract/classes/parsers/ezurlhandler.php
HandlerClass=eZURLHandler

[eztext]
HandlerFile=extension/xrowextract/classes/parsers/eztexthandler.php
HandlerClass=eZTextHandler

[ezenhancedobjectrelation]
HandlerFile=extension/xrowextract/classes/parsers/ezenhancedobjectrelationhandler.php
HandlerClass=ezenhancedobjectrelationHandler
#false will simply output the IDs of the related objects
OutputRelatedObjectNames=true

[ezselection]
HandlerFile=extension/xrowextract/classes/parsers/ezselectionhandler.php
HandlerClass=eZSelectionHandler

[ezenum]
HandlerFile=extension/xrowextract/classes/parsers/ezenumhandler.php
HandlerClass=eZEnumHandler

[ezuser]
HandlerFile=extension/xrowextract/classes/parsers/ezuserhandler.php
HandlerClass=eZUserHandler

[ezdate]
HandlerFile=extension/xrowextract/classes/parsers/ezdatehandler.php
HandlerClass=eZDateHandler

[ezboolean]
HandlerFile=extension/xrowextract/classes/parsers/ezbooleanhandler.php
HandlerClass=eZBooleanHandler

[ezcountry]
HandlerFile=extension/xrowextract/classes/parsers/ezselectionhandler.php
HandlerClass=eZSelectionHandler

[ezimage]
HandlerFile=ezimagehandler.php
HandlerClass=ezImageExportHandler

[ezmedia]
HandlerFile=ezmediahandler.php
HandlerClass=ezMediaExportHandler

[ezbinaryfile]
HandlerFile=ezbinaryfilehandler.php
HandlerClass=ezBinaryfileExportHandler

[ezmatrix]
HandlerFile=ezmatrixhandler.php
HandlerClass=ezMatrixExportHandler

[ezobjectrelationlist]
HandlerFile=extension/xrowextract/classes/parsers/ezobjectrelationlisthandler.php
HandlerClass=eZObjectRelationListHandler

[hmregexpline]
HandlerFile=extension/xrowextract/classes/parsers/hmregexplinehandler.php
HandlerClass=hmregexplineHandler

[ezprice]
HandlerFile=extension/xrowextract/classes/parsers/ezpricehandler.php
HandlerClass=eZPriceHandler

*/ ?>