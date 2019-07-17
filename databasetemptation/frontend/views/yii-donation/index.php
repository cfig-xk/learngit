<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\YiiDonationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yii Donations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-donation-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Yii Donation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'moneyid',
            '捐款人姓名',
            '单位',
            '金额',
            '用途',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
