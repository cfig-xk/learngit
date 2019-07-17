<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\YiiWorker */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yii-worker-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'workerid')->textInput() ?>

    <?= $form->field($model, 'collegeid')->textInput() ?>

    <?= $form->field($model, '姓名')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '电话')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '地址')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '邮箱')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '身份')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
