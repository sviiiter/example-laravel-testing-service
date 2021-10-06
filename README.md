# example-laravel-testing-service

Self helper crib described simple Contract-Service-Provider-Facade bundle. Example of testing Laravel contract implementation addicted to test.
Also, it contains example of CoR pattern using Pipeline.


## Quick start

- Create directory Services into your app folder 
- Copy StrReplaceService directory with classes into Services folder(or clone it). Directory structure:
````
app/Services/StrReplaceService
````

- add service provider's class name into your config/app.php:

```php
      'providers' => [
        Waste\Services\StrReplaceService\StrFormatterServiceProvider::class,
        // list of another providers
      ]
```

- Inject implementation by its contract into your service layer, [controller](app/Http/Controllers/IndexController.php) or whatever

or get instance: (app)->make(StrContract::class);







