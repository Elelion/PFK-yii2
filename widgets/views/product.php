<?php
/** @var int $product */

use app\helpers\ProductPriceFormatHelper;
use app\widgets\CartCounterWidget;
use \yii\helpers\Html;
use \yii\helpers\Url;
?>

<div class="col-md-4 chain-grid">
    <a href="<?= Url::to(['product/index', 'id' => $product->id]) ?>" class="">
        <?= Html::img("@web/images/products/{$product->img}.{$product->getExtensionImg()}", [
            'class' => 'img-responsive chain',
            'alt' => $product->title,
            'title' => $product->title,
        ]); ?>
    </a>
    <div class="product__notification-wrapper">
        <?php if ($product->hit == true): ?>
            <span class="product__notification-hit">Хит</span>
        <?php endif; ?>

        <?php if ($product->sale == true): ?>
            <span class="product__notification-sale">Акция</span>
        <?php endif; ?>
    </div>

    <div class="grid-chain-bottom">
        <h6>
            <!-- TODO: fix href -->
            <a href="<?= Url::to(['product/index', 'id' => $product->id]) ?>" class="">
                <?= $product->title; ?>
            </a>
        </h6>

        <div class="star-price">
            <div class="dolor-grid">
                <span class="actual">
                    <?php if ($product->price > 0): ?>
                        <?= ProductPriceFormatHelper::formatPrice($product->price) . ' ₽'; ?>
                    <?php else: ?>
                        <?= 'Цены нет'; ?>
                    <?php endif; ?>
                </span>

                <?php if ($product->price > 0 && $product->price_old > 0): ?>
                    <span class="reducedfrom">
                        <?= ProductPriceFormatHelper::formatPrice($product->price_old) . ' ₽'; ?>
                    </span>
                <?php endif; ?>
            </div>

            <?= CartCounterWidget::widget([
                'cartCounterType' => 'catalog',
                'product' => $product,
            ]); ?>
        </div>
    </div>
</div>
