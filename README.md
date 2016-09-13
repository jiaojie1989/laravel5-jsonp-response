Jsonp Response Format for Laravel Framework 5.x
===
## Requirements
- PHP >= 5.4
- Laravel >= 5.0

## Usage
- Add the following middleare to your `app\Http\Kernel.php` 
```php
    protected $middleware = [
        "Jiaojie\Laravel\Middlewares\Jsonp\JsonpResponse",
    ];
```

- When the request uri includes param `jsonp=true&callback=sthCallback`, the api automaticly changes into jsonp format.
```javascript
/**/myCallback(["date","2016-09-13 19:15:07"]);
```