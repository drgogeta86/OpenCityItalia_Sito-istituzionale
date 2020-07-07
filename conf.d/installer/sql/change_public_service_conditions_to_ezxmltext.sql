UPDATE ezcontentclass_attribute
	SET data_type_string = 'ezxmltext'
	WHERE identifier = 'conditions'
	    AND data_type_string = 'eztext'
	    AND contentclass_id IN (SELECT id FROM ezcontentclass WHERE identifier = 'public_service');

UPDATE ezcontentobject_attribute
	SET
		data_type_string = 'ezxmltext',
		data_text = CONCAT('<?xml version="1.0" encoding="utf-8"?><section xmlns:image="http://ez.no/namespaces/ezpublish3/image/" xmlns:xhtml="http://ez.no/namespaces/ezpublish3/xhtml/" xmlns:custom="http://ez.no/namespaces/ezpublish3/custom/"><paragraph>', regexp_replace(data_text, E'[\\n\\r]+', '</paragraph><paragraph>', 'g' ), '</paragraph></section>')
	WHERE contentclassattribute_id IN
		(SELECT id FROM ezcontentclass_attribute WHERE identifier = 'conditions' AND contentclass_id IN (SELECT id FROM ezcontentclass WHERE identifier = 'public_service'))
		AND data_type_string = 'eztext';