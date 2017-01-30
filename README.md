# Laravel-Ping

[![Build Status](https://circleci.com/gh/shimomo/laravel-ping.svg?style=shield&circle-token=42b5e80c5bd62704305421ddc8c29900acfd952d)](https://circleci.com/gh/shimomo/laravel-ping)
[![MIT License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](LICENSE)

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
        if ($latency = Ping::execute('example.com')) {
            return $latency . 'ms';
        }

        return 'error';
    }
}
```
