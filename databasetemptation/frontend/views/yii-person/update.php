<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\YiiPerson */

$this->title = 'Update Yii Person: ' . $model->personid;
$this->params['breadcrumbs'][] = ['label' => 'Yii People', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->personid, 'url' => ['view', 'id' => $model->personid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yii-person-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
