<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\YiiDonationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yii-donation-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'moneyid') ?>

    <?= $form->field($model, '捐款人姓名') ?>

    <?= $form->field($model, '单位') ?>

    <?= $form->field($model, '金额') ?>

    <?= $form->field($model, '用途') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
