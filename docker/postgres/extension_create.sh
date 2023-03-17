#! /bin/bash
echo 'create pgcrypto'
psql -v ON_ERROR_STOP=1 --username "$POSTGRES_USER" --dbname "$POSTGRES_DB" <<-EOSQL
CREATE EXTENSION IF NOT EXISTS pgcrypto;
EOSQL
exit 0