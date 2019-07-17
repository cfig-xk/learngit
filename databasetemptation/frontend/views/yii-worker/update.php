<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\YiiWorker */

$this->title = 'Update Yii Worker: ' . $model->workerid;
$this->params['breadcrumbs'][] = ['label' => 'Yii Workers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->workerid, 'url' => ['view', 'id' => $model->workerid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yii-worker-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
