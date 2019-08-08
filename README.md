Template Message with placeholder
=================================
Template Message with placeholder

[![Latest Stable Version](https://poser.pugx.org/ignatenkovnikita/yii2-template-messages/v/stable)](https://packagist.org/packages/ignatenkovnikita/yii2-template-messages) [![Total Downloads](https://poser.pugx.org/ignatenkovnikita/yii2-template-messages/downloads)](https://packagist.org/packages/ignatenkovnikita/yii2-template-messages) [![Latest Unstable Version](https://poser.pugx.org/ignatenkovnikita/yii2-template-messages/v/unstable)](https://packagist.org/packages/ignatenkovnikita/yii2-template-messages) [![License](https://poser.pugx.org/ignatenkovnikita/yii2-template-messages/license)](https://packagist.org/packages/ignatenkovnikita/yii2-template-messages)

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

In Code uses
```php
Template::replace('template_name', [
        'your_variable' => 'value
]);
```

Example
Add in migration 
```php
  $rows = [
            [
                'promo-code-send',
                'Отправка купона пользователю',
                '["promo_code"]',
                'Трэк {promo_code}'
            ],

        ];

        $this->batchInsert('{{template}}', ['id', 'title', 'placeholders', 'message'], $rows);


        $this->update('{{%template}}',['widget_options' => '{"toolbar":false,"pastePlainText":true,"buttonSource":true,"paragraphize":false}']);

```


Apply migration
```bash
./console/yii migrate --migrationPath=vendor/ignatenkovnikita/yii2-template-messages/migrations/ 
```

TODO
- add suppport email
- refactoring
