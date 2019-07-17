<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\YiiPerson */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yii-person-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'personid')->textInput() ?>

    <?= $form->field($model, '性别')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '姓名')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, '简介')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
