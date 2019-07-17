<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\YiiOrganizationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yii Organizations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-organization-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Yii Organization', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'collegeid',
            '校区',
            '名称',
            '人数',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
