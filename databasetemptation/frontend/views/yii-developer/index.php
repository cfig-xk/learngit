<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\YiiDeveloperSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yii Developers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-developer-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Yii Developer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            '学号',
            '专业',
            '姓名',
            '性别',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
