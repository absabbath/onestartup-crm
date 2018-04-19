# Package test OneStartup

  **onestartup/crm** is a module to manipulate the information that arrives through the forms of our project

# Installation

- Run this in the terminal
```php
composer require onestartup/crm
```
- after add the ServiceProvider to the providers array in config/app.php
```php
Onestartup\Crm\CrmListServiceProvider::class,
````
- run serv
```php
php artisan serve
```
- test in this route how admin user
```php
http://localhost:8000/admin/crm
```