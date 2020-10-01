BEGIN;
    LOCK TABLE eztags IN EXCLUSIVE MODE;
    SELECT setval('eztags_id_seq', COALESCE((SELECT MAX(id)+1 FROM eztags), 1), false);
COMMIT;