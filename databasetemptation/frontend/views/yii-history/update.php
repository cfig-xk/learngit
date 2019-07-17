<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\YiiHistory */

$this->title = 'Update Yii History: ' . $model->historyid;
$this->params['breadcrumbs'][] = ['label' => 'Yii Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->historyid, 'url' => ['view', 'id' => $model->historyid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yii-history-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
