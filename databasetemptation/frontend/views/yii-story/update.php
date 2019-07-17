<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\YiiStory */

$this->title = 'Update Yii Story: ' . $model->personid;
$this->params['breadcrumbs'][] = ['label' => 'Yii Stories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->personid, 'url' => ['view', 'personid' => $model->personid, 'historyid' => $model->historyid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yii-story-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
