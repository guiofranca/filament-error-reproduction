# HasManyThrough relationship manager error

Filament version: 3.0.8

[Exception Link](https://flareapp.io/share/W7z8XNVm)

The error was not happening on v3.0.0

This error seems to be also happening on the Demo

https://demo.filamentphp.com/shop/customers/983/edit?activeRelationManager=1

On `Customer` model, `public function payments(): HasManyThrough`.

# Steps to reproduce
Copy .env
```
cp .env.example .env
```

Install dependencies

https://laravel.com/docs/10.x/sail#installing-composer-dependencies-for-existing-projects

Or

```
composer install
```

If Laravel Sail was used, start it with `sail up -d`.

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