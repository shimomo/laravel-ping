# Laravel Ping

[![Build Status](https://circleci.com/gh/shimomo/laravel-ping.svg?style=shield&circle-token=42b5e80c5bd62704305421ddc8c29900acfd952d)](https://circleci.com/gh/shimomo/laravel-ping)
[![Latest Stable Version](https://poser.pugx.org/shimomo/laravel-ping/version)](https://packagist.org/packages/shimomo/laravel-ping)
[![Total Downloads](https://poser.pugx.org/shimomo/laravel-ping/downloads)](https://packagist.org/packages/shimomo/laravel-ping)
[![Dependency Status](https://www.versioneye.com/user/projects/589b50c3940b230031fbad84/badge.svg?style=flat-square)](https://www.versioneye.com/user/projects/589b50c3940b230031fbad84)
[![MIT License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](LICENSE)

## Installation
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
        if ($latency = \Ping::execute('example.com')) {
            return $latency . 'ms';
        }

        return 'error';
    }
}
```

## License
laravel-ping is open-sourced software licensed under the [MIT license](LICENSE).
