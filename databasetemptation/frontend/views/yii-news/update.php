<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\YiiNews */

$this->title = 'Update Yii News: ' . $model->newsid;
$this->params['breadcrumbs'][] = ['label' => 'Yii News', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->newsid, 'url' => ['view', 'id' => $model->newsid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yii-news-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
