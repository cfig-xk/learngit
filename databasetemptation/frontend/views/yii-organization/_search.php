<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\YiiOrganizationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yii-organization-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'collegeid') ?>

    <?= $form->field($model, '校区') ?>

    <?= $form->field($model, '名称') ?>

    <?= $form->field($model, '人数') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
