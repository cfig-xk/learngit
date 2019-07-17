<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\YiiStorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yii Stories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-story-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Yii Story', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'personid',
            'historyid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
