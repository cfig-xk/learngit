<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\YiiDeveloper */

$this->title = 'Create Yii Developer';
$this->params['breadcrumbs'][] = ['label' => 'Yii Developers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-developer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
