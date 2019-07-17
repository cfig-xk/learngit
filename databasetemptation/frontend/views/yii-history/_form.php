<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\YiiHistory */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yii-history-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'historyid')->textInput() ?>

    <?= $form->field($model, '概要')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '时间')->textInput() ?>

    <?= $form->field($model, '内容')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
