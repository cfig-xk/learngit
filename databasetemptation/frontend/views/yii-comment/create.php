<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\YiiComment */

$this->title = 'Create Yii Comment';
$this->params['breadcrumbs'][] = ['label' => 'Yii Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-comment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
