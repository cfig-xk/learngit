<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\YiiResponsible */

$this->title = 'Update Yii Responsible: ' . $model->workerid;
$this->params['breadcrumbs'][] = ['label' => 'Yii Responsibles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->workerid, 'url' => ['view', 'workerid' => $model->workerid, 'activityid' => $model->activityid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yii-responsible-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
