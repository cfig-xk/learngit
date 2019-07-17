<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\YiiPerson */

$this->title = 'Create Yii Person';
$this->params['breadcrumbs'][] = ['label' => 'Yii People', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-person-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
