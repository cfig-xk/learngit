<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\YiiActivity */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yii-activity-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'activityid')->textInput() ?>

    <?= $form->field($model, 'collegeid')->textInput() ?>

    <?= $form->field($model, '名称')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '地点')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '时间')->textInput() ?>

    <?= $form->field($model, '内容')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
