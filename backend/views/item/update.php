<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Item $model */

$this->title = 'Update Item: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="item-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelImage' => $modelImage
    ]) ?>

</div>