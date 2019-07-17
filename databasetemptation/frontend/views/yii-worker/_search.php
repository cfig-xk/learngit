<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\YiiWorkerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yii-worker-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'workerid') ?>

    <?= $form->field($model, 'collegeid') ?>

    <?= $form->field($model, '姓名') ?>

    <?= $form->field($model, '电话') ?>

    <?= $form->field($model, '地址') ?>

    <?php // echo $form->field($model, '邮箱') ?>

    <?php // echo $form->field($model, '身份') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
