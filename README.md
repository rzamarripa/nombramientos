Yii2-maintenance
================

Installation
------------

Add to the require section of your `composer.json` file:
```
"sacara/yii2-maintenance-mode": "*"
```

Add to your config file:
```php
   'bootstrap' => ['log', 'maintenance'],
   ...
   'modules' => [
     'maintenance' => [
        'class' => 'sacara\maintenance\Module',
        // optional
        'maintenanceFileOn' => 'maintenance.on', // default is `maintenance.on`
     ],
   ],
```

Create a file in the `@web` directory named `maintenance.on` to activate the maintenance mode.