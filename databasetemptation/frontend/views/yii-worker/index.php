<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\YiiWorkerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yii Workers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-worker-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Yii Worker', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'workerid',
            'collegeid',
            '姓名',
            '电话',
            '地址',
            //'邮箱',
            //'身份',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
