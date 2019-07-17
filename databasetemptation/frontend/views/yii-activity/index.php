<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\YiiActivitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yii Activities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-activity-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Yii Activity', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'activityid',
            'collegeid',
            '名称',
            '地点',
            '时间',
            //'内容',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
