<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\YiiComment */

$this->title = 'Update Yii Comment: ' . $model->commentid;
$this->params['breadcrumbs'][] = ['label' => 'Yii Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->commentid, 'url' => ['view', 'id' => $model->commentid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="yii-comment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
