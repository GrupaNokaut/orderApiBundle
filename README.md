orderApiBundle
==============

Instalation
----------

1. Add line to require section in composer.json
```
"nokaut/restclient-shop-bundle": "dev-master"
```
2. Update deps ``composer update``
3. Add ApiClientBundle to AppKernel
```php
	$bundles = array(
		...
		new Nokaut\Bundle\ApiClientBundle\ApiClientBundle()
	);
```

Configuration
-------------

```
#app/config/config.yml:

api_client:
    key_public: "yourPublicKey"
    key_private: "yourPrivateKey"
```

Usage
-----

All what do you have to do, is get service from container:

```php
$nokautClient = $this->get('nokaut.client');
```

Some example of usage client, you can get from here: https://github.com/GrupaNokaut/orderAPI/blob/master/example/simple.php