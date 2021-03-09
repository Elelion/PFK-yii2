<?php

/** @var int $products */

use app\helpers\ProductPriceFormatHelper;
use app\widgets\CartAmountWidget;
use \yii\helpers\Html;
use yii\helpers\Url;

?>

<?php if (!empty($session)): ?>
    <div class="table-response">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th class="cart-modal__img">Фото</th>
                    <th>Товар</th>
                    <th>Кол-во</th>
                    <th>Цена (₽)</th>
                    <th><span class="glyphicon glyphicon-remove"></span></th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td class="cart-modal__img">
                            <a href="<?= Url::to(['product/index', 'id' => $product->id]) ?>" class="">
                                <?= Html::img("@web/images/products/{$product->img}.{$product->getExtensionImg()}", [
                                    'height' => 60,
                                    'alt' => $product->title,
                                    'title' => $product->title,
                                ]); ?>
                            </a>
                        </td>

                        <td><?= $product->title; ?></td>
                        <td><?= $session[$product->id]; ?></td>
                        <td>
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
                    <td></td>
                    <td></td>
                    <td>Итого:</td>
                    <td colspan="2" id="cart-sum">
                        <b><?= CartAmountWidget::widget(['session' => $session]) ?></b>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <h3>У вас нет товаров</h3>
<?php endif; ?>
