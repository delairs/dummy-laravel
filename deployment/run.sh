#!/bin/sh
set -e

echo "Loading env from Vault..."

exec envconsul -config=/vault/secrets/envconsul.hcl -- \
php artisan serve --host=0.0.0.0 --port=8000