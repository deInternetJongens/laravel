# Laravel utils
This package holds some simple Laravel utils.

### Route::is()
The **is** method is an marco that is attached to the Route Facade. It's just like the **is** method on the Request Facade, but then for route names.

```php
$bool = Route::is('route.name', 'other.route*');
```

License
----

MIT
