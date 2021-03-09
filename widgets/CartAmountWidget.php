<?php


namespace app\widgets;


use app\models\Product;
use yii\base\Widget;


/**
 * NOTE:
 *
 * Widget for output of the amount all products in the cart
 *
 * @package app\widgets
 */
class CartAmountWidget extends Widget
{
    public $session;

    public function run()
    {
        $amount = 0;
        $products = Product::find()
            ->where(['IN', 'id', array_keys($this->session)])
            ->all();

        foreach ($products as $product) {
            $amount += $product->price * $this->session[$product->id];
        }

        return $this->render('cartAmount', ['amount' => $amount]);
    }
}