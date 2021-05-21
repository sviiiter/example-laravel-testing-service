# example-laravel-testing-service

Simple Contract-Service-Provider bundle. Kinda help example described testing Laravel contract realization with Dependency Injection.
It contains example of CoR pattern using Pipeline into one of service class in addition.


## Installation

- Create directory Services into your app folder 
- Copy StrReplaceService directory with classes into Services folder(or clone it). Directory structure:
````
app/Services/StrReplaceService
````

- add service provider's class name into your config/app.php:

```php
      'providers' => [
        App\Services\StrReplaceService\StrFormatterServiceProvider::class,
        // list of another providers
      ]
```

- add route into routes.php or routes/web.php

````php
  Route::get('/hi', 'indexController@hi');
````


## Usage

In your controller:

````php

  namespace App\Http\Controllers;


  use App\Services\StrReplaceService\StrContract;
    

  class IndexController extends Controller
  {

    public function hi(StrContract $t) {
      return $t->format('привет тебе');
    }

  }

````






