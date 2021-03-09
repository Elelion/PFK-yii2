<?php


namespace app\widgets;


use yii\base\Widget;


/**
 * NOTE:
 *
 * Widget for output of the product(s) on main page
 *
 * @package app\widgets
 */
class ProductWidget extends Widget
{
    public $currentProduct;

    public function run()
    {
        return $this->render('product', ['product' => $this->currentProduct]);
    }
}
