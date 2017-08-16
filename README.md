Small package for handling cache in code block and not having to use session and avoid `array_has` or the like.

```php
	$producttCache= new CacheObject([0=> 'A']);
	$producttCache->set(1, 'B');
	if($producttCache->exists(0)){
		return $producttCache->get(0);
	}
```
