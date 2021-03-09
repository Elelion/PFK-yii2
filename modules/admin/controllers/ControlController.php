<?php


namespace app\modules\admin\controllers;


use app\models\Order;
use app\models\Product;

class ControlController extends AppController
{
    public function actionIndex()
    {
        /**
         * @note
         * writing url for home admin panel in global array - params
         * look in AppController
         */
        $this->writeHomeAdminUrlToParams();

        $orders = Order::find()->count();
        $products = Product::find()->count();

        return $this->render('index', compact(
            'orders',
            'products'
        ));
    }
//@todo -29.35
    public function actionTest()
    {
        return $this->render('test');
    }
}