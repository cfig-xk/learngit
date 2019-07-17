<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\YiiResponsible */

$this->title = 'Create Yii Responsible';
$this->params['breadcrumbs'][] = ['label' => 'Yii Responsibles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-responsible-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
