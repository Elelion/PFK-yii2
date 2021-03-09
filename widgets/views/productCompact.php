<?php
/** @var int $product */

use app\helpers\ProductPriceFormatHelper;
use \yii\helpers\Html;
use \yii\helpers\Url;
?>

<div class="product-compact__wrapper">
    <a href="<?= Url::to(['product/index', 'id' => $product->id]) ?>" class="">
        <?= Html::img("@web/images/products/{$product->img}.{$product->getExtensionImg()}", [
            'class' => 'img-responsive chain',
            'alt' => $product->title,
            'title' => $product->title,
        ]); ?>

        <div class="grid-flex">
            <p><?= $product->title; ?></p>
            <span>
                <?php if ($product->price > 0): ?>
                    <?= ProductPriceFormatHelper::formatPrice($product->price) . ' ₽'; ?>
                <?php else: ?>
                    <?= 'Цены нет'; ?>
                <?php endif; ?>
            </span>
          </div>
    </a>
</div>
