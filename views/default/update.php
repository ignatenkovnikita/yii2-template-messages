<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \ignatenkovnikita\template\models\Template */

$this->title = 'Обновление шаблона: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Шаблоны', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновление';
?>
<div class="template-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
