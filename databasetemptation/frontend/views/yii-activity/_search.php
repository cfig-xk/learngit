<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\YiiActivitySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yii-activity-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'activityid') ?>

    <?= $form->field($model, 'collegeid') ?>

    <?= $form->field($model, '名称') ?>

    <?= $form->field($model, '地点') ?>

    <?= $form->field($model, '时间') ?>

    <?php // echo $form->field($model, '内容') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
