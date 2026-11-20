## TSA4 Task Manager

A Laravel task manager with user authentication, task creation and editing, task archiving, and email notifications when a task is changed to done.


## Needed

PHP 8.3 or later
Composer
Node.js and npm
SQLite

## Local Set up (Windows only IDK for Apple)
- Powershell commands:
composer install
if (-not (Test-Path .env)) { Copy-Item .env.example .env }
php artisan key:generate
if (-not (Test-Path database/database.sqlite)) { New-Item -ItemType File -Path database/database.sqlite | Out-Null }
php artisan migrate --seed
npm install
npm run build
php artisan serve

    