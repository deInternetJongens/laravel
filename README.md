# Laravel utils
This package holds some simple Laravel utils.

## Installation
Require this package

```
composer require onemustcode/laravel
```

After adding the package, add the ServiceProvider to the providers array in config/app.php

```
OneMustCode\Laravel\LaravelServiceProvider::class,
```

### Route::is()
The **is** method is an marco that is attached to the Route Facade. It's just like the **is** method on the Request Facade, but then for route names.

```php
$bool = Route::is('route.name', 'other.route*');
```

License
----

MIT
