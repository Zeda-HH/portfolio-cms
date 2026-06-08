#!/bin/bash
php artisan migrate:fresh --force --seed
php artisan config:clear
php artisan cache:clear
php artisan serve --host=0.0.0.0 --port=$PORT