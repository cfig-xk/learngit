<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\YiiActivity */

$this->title = 'Create Yii Activity';
$this->params['breadcrumbs'][] = ['label' => 'Yii Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-activity-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
