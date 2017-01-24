# Laravel-Ping
This is a package for using Ping in Laravel.

## Install
Add to ```composer.json```.
```
"shimomo/laravel-ping": "^2.0.0"
```

Execute the command.
```
$ composer update
```

Add to ```config/app.conf```.
```
'providers' => [
    // ...
    Shimomo\Laravel\PingServiceProvider::class,
]
```

Add to ```config/app.conf```.
```
'aliases' => [
    // ...
    'Ping' => Shimomo\Laravel\PingFacade::class,
]
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
        if (Ping::execute('example.com') {
            return 'OK';
        }

        return 'NG';
    }
}
```
