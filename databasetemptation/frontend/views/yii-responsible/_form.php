<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\YiiResponsible */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="yii-responsible-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'workerid')->textInput() ?>

    <?= $form->field($model, 'activityid')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
