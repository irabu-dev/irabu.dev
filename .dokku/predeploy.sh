#!/bin/bash

docker exec irab-dev-php-fpm cp .env.example .env

docker exec irab-dev-php-fpm  composer install;

docker exec irab-dev-php-fpm php artisan storage:link;