<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\YiiOrganization */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yii-organization-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'collegeid')->textInput() ?>

    <?= $form->field($model, '校区')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '名称')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '人数')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
