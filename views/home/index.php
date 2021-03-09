<?php

use app\widgets\BannerWidget;
use app\widgets\JumbotronWidget;
use app\widgets\ProductWidget;
use yii\helpers\Url;

/**
 * @var banners $banners
 * @var JumbotronWidget $jumbotron
 * @var productHits $productHits
 * @var productSales $productSales
 */
?>

<div class="shoes-grid">

    <!-- NOTE: slider -->
    <?= JumbotronWidget::widget(['currentJumbotron' => $jumbotron]); ?>

    <!-- NOTE: output banners -->
    <div class="shoes-grid-left">
        <?php foreach ($banners as $banner): ?>
            <?= BannerWidget::widget(['currentBanner' => $banner]); ?>
        <?php endforeach; ?>
    </div>

    <!-- NOTE: output product hits -->
    <div class="products">
        <h5 class="latest-product">Хит</h5>
        <a href="<?= Url::to(['catalog/view', 'id' => 'hit']) ?>" class="view-all">
            Смотреть все<span> </span>
        </a>
    </div>
    <div class="product-left">
        <?php foreach ($productHits as $hit): ?>
            <?= ProductWidget::widget(['currentProduct' => $hit]); ?>
        <?php endforeach; ?>
        <div class="clearfix"> </div>
    </div>

    <!-- NOTE: output product sale -->
    <div class="products">
        <h5 class="latest-product">Акция</h5>
        <a href="<?= Url::to(['catalog/view', 'id' => 'sale']) ?>" class="view-all">
            Смотреть все<span> </span>
        </a>
    </div>
    <div class="product-left">
        <?php foreach ($productSales as $sale): ?>
            <?= ProductWidget::widget(['currentProduct' => $sale]); ?>
        <?php endforeach; ?>
        <div class="clearfix"> </div>
    </div>

    <div class="clearfix"> </div>
</div>