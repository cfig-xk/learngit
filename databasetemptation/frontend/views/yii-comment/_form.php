<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\YiiComment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yii-comment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'commentid')->textInput() ?>

    <?= $form->field($model, 'userid')->textInput() ?>

    <?= $form->field($model, '发布时间')->textInput() ?>

    <?= $form->field($model, '内容')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
