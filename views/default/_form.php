<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget as imperavi;

/* @var $this yii\web\View */
/* @var $model \ignatenkovnikita\template\models\Template */
/* @var $form yii\widgets\ActiveForm */

$jsPath = $this->assetManager->publish(__DIR__ . '/../../js/template.js');
$this->registerJsFile($jsPath[1], ['depends' => [\yii\web\JqueryAsset::className()]]);
?>


<div class="template-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <p>Доступные плейсхолдеры:
        <strong>
            <?php foreach ($model->getPlaceholderList() as $item) { ?>
                <?= Html::a($item, '#', ['class' => 'email-placeholder']); ?>
            <?php } ?>
        </strong>
    </p>

    <?= $form->field($model, 'message')->widget(
        \yii\imperavi\Widget::className(),
        [
            'plugins' => ['source'],
            'htmlOptions' => ['id' => 'template-redactor'],
            'options' => json_decode($model->widget_options,true),

        ]
    ); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить',
            ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
