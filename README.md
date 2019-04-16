Agnostic php package.

Small package for handling cache in code block and not having to use session and avoid `array_has` or the like.

```php

	$productCache= new CacheObject([0=> 'A']);
	$productCache->set(1, 'B');
	if($productCache->exists(0)){
		return $productCache->get(0);
	}
```

```php

use Oscarricardosan\CacheObject\CacheObject;

class Product
{ 

    /**
     * @var CacheObject
     */
    protected $productCache;

    public function __construct()
    {
        $this->$productCache= new CacheObject([
            'potato'=> ['name'=> 'Potato', 'value'=> 10]
        ]);
    }
    

    public function addTomatoToProducts($value)
    {
        $productCache->set('tomato', $value);
    }
    

    public function getTomatoProduct()
    {
        if(!$productCache->exists('tomato')){
            $productCache->set('tomato', ['name'=> 'Tomato default', 'value'=> 7]);
        }
        return $productCache->get('tomato');
    }
	
}

____________________________________________

$product= new Product();

print_r($product->getTomatoProduct());
//['name'=> 'Tomato default', 'value'=> 7]
$product->addTomatoToProducts(['name'=> 'Real Tomato', 'real_value'=> 1200, 'money', 'COP'])

print_r($product->getTomatoProduct());
//['name'=> 'Real Tomato', 'real_value'=> 1200, 'money', 'COP']

```

Method "getOrSet", receives as parameters the key to obtain and if it does not exist it executes the second parameter which must be a function. It works to avoid having to use an "if ($ productCache-> exists ('tomato'))"



```php
    

    public function getTomatoProduct()
    {
        return $productCache->getOrSet('tomato', function(){
    	    return ['name'=> 'Tomato default', 'value'=> 7];
    	})
    }
	
```
