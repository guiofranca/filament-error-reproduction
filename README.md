# HasManyThrough relationship manager error

Filament version: 3.0.8

[Exception Link](https://flareapp.io/share/W7z8XNVm)

The error was not happening on v3.0.0

This error seems to be also happening on the Demo

https://demo.filamentphp.com/shop/customers/983/edit?activeRelationManager=1

On `Customer` model, `public function payments(): HasManyThrough`.

# Steps to reproduce
Start up the containers
```bash
sail up -d
```
or
```bash
docker-compose up -d
```
Install dependencies
```
composer install
```

Migrate and seed

```
php artisan migrate:fresh --seed
```
Access the application on http://localhost/admin

## The problem

There are a few models on the application to accomplish a `HasManyThrough` relationship.

As follows:

- Mother
    - Child
        - GrandChild

So a `Mother` HasMany `GrandChild` Through `Child`.

Access the `Mother` resource page and try to add a GrandChild to see the error.