#!/bin/bash
set -e

# Reset password of user admin to 'admin'
# be sure to have 
#    [UserSettings]
#    HashType=md5_user
# in site.ini.append.php

psql -v ON_ERROR_STOP=1 --username "$POSTGRES_USER" --dbname "$POSTGRES_DB" <<-EOSQL
UPDATE ezuser_setting SET is_enabled = '1' WHERE ezuser_setting.user_id =14;
UPDATE ezuser SET password_hash = 'bab77ccf06f0b1f982e11c60f344c3c2' WHERE ezuser.contentobject_id =14;
EOSQL

# reset also users?
# UPDATE ezuser SET password_hash = '', login = md5(random()::text), email = md5(''||now()::text||random()::text) WHERE ezuser.contentobject_id > 2000;

