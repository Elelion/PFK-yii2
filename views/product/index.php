<?php
use app\assets\ProductAsset;
use app\helpers\ProductPriceFormatHelper;
use app\helpers\ProductTypeHelper;
use app\widgets\CartCounterWidget;
use app\widgets\ProductCompactWidget;
use yii\helpers\Html;

ProductAsset::register($this);

/** @var array $product */
/** @var array $productСarousel */
?>

<div class="container">
    <div class=" single_top">
        <div class="single_grid">
            <div class="grid images_3_of_2">
                <ul id="etalage">

                    <!-- NOTE: main img -->
                    <li>
                        <?= Html::img("@web/images/products/{$product->img}.{$product->getExtensionImg()}", [
                          'class' => 'etalage_source_image img-responsive'
                        ]); ?>
                    </li>

                    <!-- FIXME: activate when there are several images on the product -->
                    <!--  NOTE: small img -->
                    <!--
                    <li>
                        <img class="etalage_thumb_image" src="images/s2.jpg" class="img-responsive" />
                        <img class="etalage_source_image" src="images/si2.jpg" class="img-responsive" title="" />
                    </li>
                    <li>
                        <img class="etalage_thumb_image" src="images/s3.jpg" class="img-responsive"  />
                        <img class="etalage_source_image" src="images/si3.jpg"class="img-responsive"  />
                    </li>
                    <li>
                        <img class="etalage_thumb_image" src="images/s1.jpg" class="img-responsive"  />
                        <img class="etalage_source_image" src="images/si1.jpg"class="img-responsive"  />
                    </li>
                    -->
                </ul>
                <div class="clearfix"> </div>
            </div>
            <div class="desc1 span_3_of_2">
                <h4><?= $product->title; ?></h4>
                <div class="cart-a">
                    <h5>Артикул: <?= chunk_split($product->article,2 , ' '); ?></h5>
                </div>
                <div class="cart-b">
                    <div class="left-n">
                        <?php if ($product->price > 0): ?>
                            <?= ProductPriceFormatHelper::formatPrice($product->price) . ' ₽'; ?>
                        <?php else: ?>
                            <?= 'Цены нет'; ?>
                        <?php endif; ?>
                    </div>

                    <div class="cart-counter__wrapper">
                        <?= CartCounterWidget::widget([
                            'cartCounterType' => 'product',
                            'product' => $product,
                        ]); ?>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <h6><?= ProductTypeHelper::productType($product->sale, $product->hit); ?></h6>

                <p><?= $product->description; ?></p>
            </div>
            <div class="clearfix"> </div>
        </div>

        <div class="toogle">
            <h3 class="m_3">Мы рекомендуем</h3>
        </div>
        <ul id="flexiselDemo1">
            <?php foreach ($productСarousel as $product): ?>
                <li>
                    <?= ProductCompactWidget::widget(['currentProduct' => $product]); ?>
                </li>
            <?php endforeach; ?>
        </ul>


<!--        <ul id="flexiselDemo1">-->
<!--            <li>-->
<!--                <div class="product__wrapper">-->
<!--                    --><?//= Html::img("@web/images/pi.jpg"); ?>
<!--                    <div class="grid-flex">-->
<!--                        <a href="#">Bloch</a>-->
<!--                        <p>Rs 850</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </li>-->
<!---->
<!--            <li>-->
<!--                <div class="product__wrapper">-->
<!--                    --><?//= Html::img("@web/images/pi1.jpg"); ?>
<!--                    <div class="grid-flex">-->
<!--                        <a href="#">Capzio</a>-->
<!--                        <p>Rs 850</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </li>-->
<!--            <li>-->
<!--                <div class="product__wrapper">-->
<!--                    --><?//= Html::img("@web/images/pi2.jpg"); ?>
<!--                    <div class="grid-flex">-->
<!--                        <a href="#">Zumba</a>-->
<!--                        <p>Rs 850</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </li>-->
<!--            <li>-->
<!--                <li>-->
<!--                    <div class="product__wrapper">-->
<!--                        --><?//= Html::img("@web/images/pi3.jpg"); ?>
<!--                        <div class="grid-flex">-->
<!--                            <a href="#">Bloch</a>-->
<!--                            <p>Rs 850</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </li>-->
<!--            </li>-->
<!--            <li>-->
<!--                <div class="product__wrapper">-->
<!--                    --><?//= Html::img("@web/images/pi4.jpg"); ?>
<!--                        <div class="grid-flex">-->
<!--                            <a href="#">Capzio</a>-->
<!--                            <p>Rs 850</p>-->
<!--                        </div>-->
<!--                </div>-->
<!--            </li>-->
<!--        </ul>-->
        <script type="text/javascript">

        </script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>

    <!---->

</div>
