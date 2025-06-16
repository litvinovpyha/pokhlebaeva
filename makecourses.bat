@echo off
php artisan make:admin
php artisan import:users-courses
php artisan import:lessons      