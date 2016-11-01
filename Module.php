<?php
/**
 * Created by PhpStorm.
 * User: ignatenkovnikita
 * Date: 02/11/16
 * Time: 01:06
 * Web Site: http://IgnatenkovNikita.ru
 */

namespace ignatenkovnikita\template;

/**
 * template module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'ignatenkovnikita\template\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
