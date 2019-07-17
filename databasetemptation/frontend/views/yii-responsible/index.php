<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\YiiResponsibleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yii Responsibles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-responsible-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Yii Responsible', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'workerid',
            'activityid',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
