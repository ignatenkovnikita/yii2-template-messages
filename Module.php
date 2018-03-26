<?php
/**
 * Created by PhpStorm.
 * User: ignatenkovnikita
 * Date: 02/11/16
 * Time: 01:06
 * Web Site: http://IgnatenkovNikita.ru
 */

namespace ignatenkovnikita\template;

use ignatenkovnikita\template\models\Template;

/**
 * template module definition class
 */
class Module extends \yii\base\Module
{

    public $modelClass = Template::class;
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
