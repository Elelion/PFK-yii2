<?php


namespace app\widgets;


use app\models\Product;
use yii\base\Widget;


/**
 * NOTE:
 *
 * Widget for output of the modal cart on the layout
 *
 * @package app\widgets
 */
class CartWidget extends Widget
{
    public $session;

    public function run()
    {
        $products = Product::find()
            ->where(['IN', 'id', array_keys($this->session)])
            ->all();

        return $this->render('cart', [
            'session' => $this->session,
            'products' => $products,
        ]);
    }
}