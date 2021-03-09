<?php
/** @var int $banner */

use yii\helpers\Html;
use yii\helpers\Url; ?>

  <!-- TODO: fix href -->
<a href="<?= Url::to(['home/banner', 'id' => $banner->id]) ?>" class="">
    <div class="col-md-6 con-sed-grid">
        <div class="elit-grid">
            <h4><?= $banner->title; ?></h4>
            <p><?= $banner->mini_description; ?></p>
            <span class="on-get">Подробнее</span>
        </div>

        <?= Html::img("@web/images/{$banner->img}.jpg", [
            'class' => 'img-responsive shoe-left',
            'alt' => $banner->title,
            'title' => $banner->title,
        ]); ?>
        <div class="clearfix"> </div>
    </div>
</a>
