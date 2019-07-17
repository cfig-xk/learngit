<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\YiiDonation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yii-donation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'moneyid')->textInput() ?>

    <?= $form->field($model, '捐款人姓名')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '单位')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '金额')->textInput() ?>

    <?= $form->field($model, '用途')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
