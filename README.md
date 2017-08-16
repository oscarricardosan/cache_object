Small package for handling cache in code block and not having to use session and avoid `array_has` or the like.

```php
    $producttCache= new CacheObject(['0', 'paila']);
    $producttCache->set('1', 'olla');
    if($producttCache->exists('1')){
        ...
    }
```