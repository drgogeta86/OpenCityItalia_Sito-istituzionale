DO $do$ BEGIN IF (SELECT data_type FROM information_schema.columns WHERE column_name = 'published' AND table_name = 'ezcontentobject') = 'integer' THEN ALTER TABLE ezcontentobject ALTER COLUMN published TYPE BIGINT;ALTER TABLE ezcontentobject ALTER COLUMN modified TYPE BIGINT; END IF; END $do$