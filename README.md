Template Message with placeholder
=================================
Template Message with placeholder

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist ignatenkovnikita/yii2-template-messages "*"
```

or add

```
"ignatenkovnikita/yii2-template-messages": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
'modules'=>[
        'template' => [
            'class' => 'ignatenkovnikita\template\Module',
        ],
    ],
```

Apply migration
```bash
./console/yii migrate --migrationPath=vendor/ignatenkovnikita/yii2-template-messages/migrations/ 
```

TODO
- add suppport email
- refactoring