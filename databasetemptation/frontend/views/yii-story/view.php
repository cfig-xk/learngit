<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\YiiStory */

$this->title = $model->personid;
$this->params['breadcrumbs'][] = ['label' => 'Yii Stories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="yii-story-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'personid' => $model->personid, 'historyid' => $model->historyid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'personid' => $model->personid, 'historyid' => $model->historyid], [
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
            'personid',
            'historyid',
        ],
    ]) ?>

</div>
