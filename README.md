Jsonp Response Format for Laravel Framework 5.x
===
[![Latest Stable Version](https://poser.pugx.org/jiaojie/laravel5-jsonp-response/v/stable.svg)](https://packagist.org/packages/jiaojie/laravel5-jsonp-response) [![Total Downloads](https://poser.pugx.org/jiaojie/laravel5-jsonp-response/downloads.svg)](https://packagist.org/packages/jiaojie/laravel5-jsonp-response) [![Latest Unstable Version](https://poser.pugx.org/jiaojie/laravel5-jsonp-response/v/unstable.svg)](https://packagist.org/packages/jiaojie/laravel5-jsonp-response) [![License](https://poser.pugx.org/jiaojie/laravel5-jsonp-response/license.svg)](https://packagist.org/packages/jiaojie/laravel5-jsonp-response)
## Requirements
- PHP >= 5.4
- Laravel >= 5.0

## Usage
- Install
Simply run `composer install "jiaojie/laravel5-jsonp-response"`.

- Add the following middleare to your `app\Http\Kernel.php` 
```php
    protected $middleware = [
        "Jiaojie\Laravel\Middlewares\Jsonp\JsonpResponse",
    ];
```

- When the request uri includes param `__jsonp=true&callback=sthCallback`, the api automaticly changes into jsonp format.
```javascript
/**/myCallback(["date","2016-09-13 19:15:07"]);
```

## Notice
- If param `callback` is set to a number, then the javascript callback function is forced to be named `callback`.
