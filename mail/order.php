<?php
use \app\helpers\ProductPriceFormatHelper;
use \app\widgets\CartAmountWidget;
?>

<div class="table-response">
    <table
        class="table table-bordered text-center"
        style="width: 100%; border: 1px solid #ddd; border-collapse: collapse;">
        <thead>
        <tr style="background: #f9f9f9">
            <th class="text-center" style="padding: 8px; border: 1px solid #ddd">Товар</th>
            <th class="text-center" style="padding: 8px; border: 1px solid #ddd">Кол-во</th>
            <th class="text-center" style="padding: 8px; border: 1px solid #ddd">Цена за шт (₽)</th>
            <th class="text-center" style="padding: 8px; border: 1px solid #ddd">Цена (₽)</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td style="padding: 8px; border: 1px solid #ddd"><?= $product->title; ?></td>
                <td style="padding: 8px; border: 1px solid #ddd">
                    <div class="order__cart-wrapper_counter">
                        <?= $session[$product->id]; ?>
                    </div>
                </td style="padding: 8px; border: 1px solid #ddd">
                <td  style="padding: 8px; border: 1px solid #ddd" class="order__cart_current-price">
                    <?php if ($product->price > 0): ?>
                        <?= ProductPriceFormatHelper::formatPrice($product->price); ?>
                    <?php else: ?>
                        <?= 'Цены нет'; ?>
                    <?php endif; ?>
                </td>
                <td  style="padding: 8px; border: 1px solid #ddd" class="order__cart_amount-price">
                    <?php if ($product->price > 0): ?>
                        <?= ProductPriceFormatHelper::formatPrice(
                            $product->price * $session[$product->id]); ?>
                    <?php else: ?>
                        <?= 'Цены нет'; ?>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>

        <tr>
            <td colspan="3" class="order__align-right"  style="padding: 8px; border: 1px solid #ddd">Итого:</td>
            <td class="order__cart-amount"  style="padding: 8px; border: 1px solid #ddd">
                <?= CartAmountWidget::widget(['session' => $session]) ?>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<br>
<br>
<p>Ваш заказ принят в обработку.</p>
<p>Наш менеджер свяжется с Вами.</p>