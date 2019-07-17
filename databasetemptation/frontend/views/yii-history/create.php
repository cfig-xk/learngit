<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\YiiHistory */

$this->title = 'Create Yii History';
$this->params['breadcrumbs'][] = ['label' => 'Yii Histories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-history-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
