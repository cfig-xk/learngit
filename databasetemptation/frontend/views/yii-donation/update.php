<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\YiiDonation */

$this->title = 'Update Yii Donation: ' . $model->moneyid;
$this->params['breadcrumbs'][] = ['label' => 'Yii Donations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->moneyid, 'url' => ['view', 'id' => $model->moneyid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yii-donation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
