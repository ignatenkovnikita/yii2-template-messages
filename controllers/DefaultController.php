<?php

/**
 * Created by PhpStorm.
 * User: ignatenkovnikita
 * Date: 02/11/16
 * Time: 01:07
 * Web Site: http://IgnatenkovNikita.ru
 */

namespace ignatenkovnikita\template\controllers;

use yii\web\Controller;

/**
 * Default controller for the `template` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
