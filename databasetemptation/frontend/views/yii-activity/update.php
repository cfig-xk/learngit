<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\YiiActivity */

$this->title = 'Update Yii Activity: ' . $model->activityid;
$this->params['breadcrumbs'][] = ['label' => 'Yii Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->activityid, 'url' => ['view', 'id' => $model->activityid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yii-activity-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
