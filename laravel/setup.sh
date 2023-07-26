#!/bin/sh
chmod 777 -R storage
cp -f ./.env.example ./.env
php artisan key:generate
