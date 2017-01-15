# Laravel-Ping

## Install
Add to ```composer.json```.
```
"shimomo/laravel-ping": "^1.0.0"
```

Execute the command.
```
$ composer update
```

Add to ```config/app.conf```.
```
'providers' => [
    // ...
    Shimomo\Ping\LaravelPingServiceProvider::class,
]
```

Add to ```config/app.conf```.
```
'aliases' => [
    // ...
    'Ping' => Shimomo\Ping\LaravelPingFacade::class,
]
```

## Usage
```
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
