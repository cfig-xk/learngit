<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\YiiStory */

$this->title = 'Create Yii Story';
$this->params['breadcrumbs'][] = ['label' => 'Yii Stories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="yii-story-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
