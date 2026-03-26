#!/bin/sh
set -e

echo "Loading env from Vault..."

exec envconsul -config=/vault/secrets/envconsul.hcl -- sh -c '
  echo "envconsul started"
  echo "APP_ENV=$APP_ENV"
  echo "APP_DEBUG=$APP_DEBUG"
  exec php artisan serve --host=0.0.0.0 --port=8000
'