# Laravel-Ping
This is a package for using Ping in Laravel.

## Install
Install via Composer.
```
$ composer require shimomo/laravel-ping
```

Add to ```config/app.php```.
```php
<?php

return [

    // ...

    'providers' => [
        // ...
        Shimomo\Laravel\PingServiceProvider::class,
    ],

    // ...

    'aliases' => [
        // ...
        'Ping' => Shimomo\Laravel\PingFacade::class,
    ],
];
```

## Usage
```php
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Ping;

/**
 * @author shimomo
 */
class PingController extends Controller
{
    /**
     * @return string
     */
    public function execute()
    {
        if (Ping::execute('example.com')) {
            return 'OK';
        }

        return 'NG';
    }
}
```
