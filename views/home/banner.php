<?php

use yii\helpers\Html;

?>
<div class="row services-category">
    <div class="col-sm-3 col-md-4 col-lg-3">
        <?= Html::img("@web/images/{$banner->img}.jpg", [
            'class' => 'img-responsive services-category__img',
            'alt' => $banner->title,
            'title' => $banner->title,
        ]); ?>
    </div>
    <div class="col-sm-9 col-md-8 col-lg-9">
        <h1 class="general__title">
            <?= $banner->title; ?>
        </h1>
    </div>

    <div class="clearfix"></div>

    <div class="col-lg-12"><?= $banner->full_description; ?></div>
</div>