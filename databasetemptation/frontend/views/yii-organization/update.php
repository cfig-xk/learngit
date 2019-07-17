<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\YiiOrganization */

$this->title = 'Update Yii Organization: ' . $model->collegeid;
$this->params['breadcrumbs'][] = ['label' => 'Yii Organizations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->collegeid, 'url' => ['view', 'id' => $model->collegeid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yii-organization-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
