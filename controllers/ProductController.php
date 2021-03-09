<?php

namespace app\controllers;

use app\models\Product;
use yii\web\NotFoundHttpException;

class ProductController extends AppController
{
    /**
     * NOTE:
     *
     * Action for view only once of the products
     */
    public function actionIndex($id)
    {
        $product = Product::findOne($id);

        if (empty($product)) {
            throw new NotFoundHttpException('Такого продукта нет...');
        }

        $this->setMeta("{$product->title}. " . \Yii::$app->name,
            $product->description,
            $product->title
        );

        $productСarousel = Product::find()
            ->where(['OR', 'hit' => 1, 'sale' => 1])
            ->orderBy('RAND()')
            ->limit(10)
            ->all();

        return $this->render('index', compact(
            'product',
            'productСarousel'
        ));
    }
}