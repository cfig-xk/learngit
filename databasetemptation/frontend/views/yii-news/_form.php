<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\YiiNews */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yii-news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'newsid')->textInput() ?>

    <?= $form->field($model, '标题')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '内容')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '发布时间')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
