<?php

/** @var int $products */

use app\assets\OrderAsset;
use app\helpers\ProductPriceFormatHelper;
use app\widgets\CartAmountWidget;
use app\widgets\CartCounterWidget;
use \yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

OrderAsset::register($this);
?>

<div class="row order__title">
    <?php if (empty($session)): ?>
        <p>Ваша корзина пуста...</p>
    <?php else: ?>
        <p>В вашей корзине: <?= count($session); ?> товаров</p>
    <?php endif; ?>
</div>

<?php if (!empty($session)): ?>
    <div class="table-response">
        <?php $form = ActiveForm::begin([
            'action' => ['cart/order'],
            'options' => [
                'method' => 'post',
            ]
        ]); ?>
            <table class="table table-bordered text-center">
                <thead>
                <tr>
                    <th class="text-center">Продукт</th>
                    <th class="text-center">Товар</th>
                    <th class="text-center">Кол-во</th>
                    <th class="text-center">Цена за шт (₽)</th>
                    <th class="text-center">Цена (₽)</th>
                    <th class="text-center"><span class="glyphicon glyphicon-remove"></span></th>
                </tr>
                </thead>

                <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td>
                            <a href="<?= Url::to(['product/index', 'id' => $product->id]) ?>" class="">
                                <?= Html::img("@web/images/products/{$product->img}.{$product->getExtensionImg()}", [
                                    'height' => 60,
                                    'alt' => $product->title,
                                    'title' => $product->title,
                                ]); ?>
                            </a>
                        </td>

                        <td><?= $product->title; ?></td>
                        <td>
                            <div class="order__cart-wrapper_counter">

                                <!-- NOTE: subtract -->
                                <button class="product__cart-deal_subtract product__cart-deal_subtract-img" name=""></button>

                                <!-- NOTE: deal -->
                                <input
                                    class="product__cart-deal_input"
                                    type="text"
                                    name="quantity[<?= $product->id; ?>]"
                                    placeholder="0"
                                    value=<?= $session[$product->id]; ?>
                                    maxlength="2"
                                    onkeypress="return (event.charCode >= 48 &amp;&amp; event.charCode <= 57)">

                                <!-- NOTE: increase -->
                                <button class="product__cart-deal_add product__cart-deal_add-img" name=""></button>
                            </div>
                        </td>
                        <td class="order__cart_current-price">
                            <?php if ($product->price > 0): ?>
                                <?= ProductPriceFormatHelper::formatPrice($product->price); ?>
                            <?php else: ?>
                                <?= 'Цены нет'; ?>
                            <?php endif; ?>
                        </td>
                        <td class="order__cart_amount-price">
                            <?php if ($product->price > 0): ?>
                                <?= ProductPriceFormatHelper::formatPrice(
                                    $product->price * $session[$product->id]); ?>
                            <?php else: ?>
                                <?= 'Цены нет'; ?>
                            <?php endif; ?>
                        </td>

                        <!-- NOTE: data-id - to delete a product that we select -->
                        <td>
                            <a href="<?= Url::to(['cart/drop', 'id' => $product->id]) ?>"
                            <span data-id="<?= $product->id; ?>"
                                  class="glyphicon glyphicon-remove text-danger del-item"
                                  aria-hidden="true"></span>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>

                <tr>
                    <td colspan="4" class="order__align-right">Итого:</td>
                    <td colspan="2" class="order__cart-amount">
                        <?= CartAmountWidget::widget(['session' => $session]) ?>
                    </td>
                </tr>
                </tbody>
            </table>

            <?= Html::submitButton('Далее', [
                'class' => 'on-get order__button'
            ]); ?>
        <?php ActiveForm::end(); ?>
    </div>
<?php endif; ?>