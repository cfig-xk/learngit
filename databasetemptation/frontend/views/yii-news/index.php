<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\YiiNewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yii News';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-news-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Yii News', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'newsid',
            '标题',
            '内容',
            '发布时间',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
