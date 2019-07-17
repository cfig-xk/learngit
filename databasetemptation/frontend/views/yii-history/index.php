<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\YiiHistorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yii Histories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-history-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Yii History', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'historyid',
            '概要',
            '时间',
            '内容',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
