<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\YiiResponsible */

$this->title = $model->workerid;
$this->params['breadcrumbs'][] = ['label' => 'Yii Responsibles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="yii-responsible-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'workerid' => $model->workerid, 'activityid' => $model->activityid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'workerid' => $model->workerid, 'activityid' => $model->activityid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'workerid',
            'activityid',
        ],
    ]) ?>

</div>
