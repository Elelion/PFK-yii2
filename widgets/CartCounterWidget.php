<?php


namespace app\widgets;


use yii\base\Widget;


/**
 * NOTE:
 *
 * Widget for displaying the cart counter (+, -, add)
 *
 * @package app\widgets
 */
class CartCounterWidget extends Widget
{
    public $cartCounterType;
    public $product;

    public function run()
    {
        return $this->render('cartCounter', [
            'type' => $this->cartCounterType,
            'product' => $this->product,
        ]);
    }
}