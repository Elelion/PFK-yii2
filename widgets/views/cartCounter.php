<?php
/** @var TYPE_NAME $type */
/** @var Product $product */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin([
    //'id' => $product->id,
    'action' => ['cart/add', 'id' => $product->id],
    'options' => [
        'method' => 'post',
        'class' => "product__cart-wrapper_{$type}",
    ]
]); ?>

    <!-- NOTE: subtract -->
    <button class="product__cart-deal_subtract product__cart-deal_subtract-img" name=""></button>

    <!-- NOTE: deal -->
    <input
        class="product__cart-deal_input"
        type="text"
        name="quantity"
        placeholder="0"
        value="1"
        maxlength="2"
        onkeypress="return (event.charCode >= 48 &amp;&amp; event.charCode <= 57)">

    <!-- NOTE: increase -->
    <button class="product__cart-deal_add product__cart-deal_add-img" name=""></button>

    <!-- NOTE: add to cart -->
    <?php if ($type == 'catalog'): ?>
        <?= Html::submitButton('', [
            'class' => 'button-cart
                button-basket__extension-basket
                catalog-product__basket-img'
            ]); ?>
    <?php endif; ?>

    <?php if ($type == 'product'): ?>
        <?= Html::submitButton('В корзину', [
            'class' => 'button-cart
                now-get
                get-cart-in'
        ]); ?>
    <?php endif; ?>
<?php ActiveForm::end(); ?>
