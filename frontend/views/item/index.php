<?php

use frontend\models\Item;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\ItemSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <h4>Owner : Dukhaan Kamimpangan</h4>

    <div class="mt-5 flex flex-wrap row">
    <?php foreach ($items as $item): ?>
    <div class="card mx-2 mb-3" style="width: 18rem;">
        <img class="card-img-top" src="./../../uploads/<?= $item->image ?>" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"><?= Html::encode($item->name) ?></h5>
            <p class="card-text"></p>
            <?php if (!Yii::$app->user->isGuest): ?>
                <?= Html::a('Order Item', ["customer/order'?id" . $item->id], ['class' => 'btn btn-success']) ?>
            <?php endif; ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>



</div>