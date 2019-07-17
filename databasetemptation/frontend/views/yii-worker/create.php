<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\YiiWorker */

$this->title = 'Create Yii Worker';
$this->params['breadcrumbs'][] = ['label' => 'Yii Workers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-worker-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
