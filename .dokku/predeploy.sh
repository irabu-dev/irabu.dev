#!/bin/bash

cp .env.example .env

composer install;

php artisan storage:link;