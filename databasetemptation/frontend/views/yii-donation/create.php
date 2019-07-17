<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\YiiDonation */

$this->title = 'Create Yii Donation';
$this->params['breadcrumbs'][] = ['label' => 'Yii Donations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-donation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
