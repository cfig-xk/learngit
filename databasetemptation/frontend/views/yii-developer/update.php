<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\YiiDeveloper */

$this->title = 'Update Yii Developer: ' . $model->学号;
$this->params['breadcrumbs'][] = ['label' => 'Yii Developers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->学号, 'url' => ['view', 'id' => $model->学号]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yii-developer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
