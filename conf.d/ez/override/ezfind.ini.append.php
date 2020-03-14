<?php /* #?ini charset="utf-8"?

[IndexOptions]
OptimizeOnCommit=disabled

[SolrFieldMapSettings]
CustomMap[ezobjectrelation]=ocSolrDocumentFieldObjectRelation
CustomMap[ezobjectrelationlist]=ocSolrDocumentFieldObjectRelation
CustomMap[ezdate]=ocSolrDocumentFieldDate
CustomMap[ezdatetime]=ocSolrDocumentFieldDate
CustomMap[ezinteger]=ocSolrDocumentFieldInteger

DatatypeMap[ezobjectrelationlist]=string
DatatypeMap[ezinteger]=sint

DatatypeMapSort[ezstring]=string
DatatypeMapSort[ezinteger]=sint

DatatypeMapFilter[ezstring]=string
DatatypeMapFilter[ezinteger]=sint

DatatypeMapFacet[ezinteger]=sint

[IndexBoost]
Class[political_body]=3.0
Class[public_service]=2.6
Class[office]=2.6
Class[user]=2.5
Class[politico]=2.5

Attribute[title]=2.0
Attribute[name]=2.0
Attribute[abstract]=1.5
Attribute[descrizione]=0.1

[IndexExclude]
ClassIdentifierList[]=file

[HighLighting]
Enabled=false

[SearchFilters]
ExcludeOwnerName=enabled

*/ ?>
