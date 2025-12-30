#!/bin/bash

# Git 2.35+ may refuse to operate on bind-mounted repos with differing ownership ("dubious ownership").
# Mark /app as safe within the container.
git config --global --add safe.directory /app 2>/dev/null || true

set -e

env

if [[ -n "$1" ]]; then
    exec "$@"
else
    composer install
    wait-for-it db:3306 -t 45
    php artisan migrate --database=mysql --force
    chown -R www-data storage public/uploads bootstrap/cache
    exec apache2-foreground
fi
