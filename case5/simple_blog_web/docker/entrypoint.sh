#!/bin/bash

echo "Waiting for MySQL to be ready..."

sleep 5


php artisan migrate:fresh
php artisan key:generate
php artisan db:seed

php artisan serve --port=$PORT --host=0.0.0.0 --env=.env