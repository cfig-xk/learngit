<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\YiiCommentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yii Comments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-comment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Yii Comment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'commentid',
            'userid',
            '发布时间',
            '内容',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
