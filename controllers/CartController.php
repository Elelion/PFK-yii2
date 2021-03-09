<?php

namespace app\controllers;

use app\models\Order;
use app\models\OrderProduct;
use app\models\Product;
use app\widgets\CartAmountWidget;
use yii\web\NotFoundHttpException;

class CartController extends AppController
{
    public function actionAdd($id)
    {
        $product = Product::findOne($id);

        if ($product === null) {
            throw new NotFoundHttpException('Товар не найден');
        }

        if (\Yii::$app->request->isPost) {
            \Yii::$app->cart->add($id, \Yii::$app->request->post('quantity'));
            return $this->redirect(\Yii::$app->request->referrer);
        } else {
            throw new NotFoundHttpException('Переход на страницу был осуществлен не корректно');
        }
    }

    public function actionDrop($id)
    {
        if ($id === null) {
            throw new NotFoundHttpException('Товар не найден');
        }

        if (\Yii::$app->request->isGet) {
            \Yii::$app->cart->drop($id);
            return $this->redirect(\Yii::$app->request->referrer);
        } else {
            throw new NotFoundHttpException('Переход на страницу был осуществлен не корректно');
        }
    }

    public function actionClear()
    {
        \Yii::$app->cart->clear();
        return $this->redirect(\Yii::$app->request->referrer);
    }

    public function actionView()
    {
        $this->layout = 'withoutCategory';

        $this->setMeta(\Yii::$app->name,
            'Ваша корзина заказов',
            'заказать, купить, купить окна, заказать окна,
            купить пластиковые окна, заказать ПВХ'
        );

        $session = \Yii::$app->session->get('cart');

        $products = Product::find()
            ->where(['IN', 'id', array_keys($session)])
            ->all();

        return $this->render('view', compact(
            'products',
            'session'
        ));
    }

    public function actionOrder()
    {
        $this->layout = 'withoutCategory';

        $this->setMeta(\Yii::$app->name,
            'Оформить заказ',
            'оформить, оформить окна, оформить заказ, оформить ПВХ'
        );

        $order = new Order();
        $cart = \Yii::$app->request->post('quantity');

        foreach ($cart as $key => $value) {
            \Yii::$app->cart->update($key, $value);
        }

        return $this->render('order', compact(
            'order'
        ));
    }

    public function actionPalace()
    {
        $this->layout = 'withoutCategory';

        if (!\Yii::$app->request->isPost) {
            throw new NotFoundHttpException('Переход на страницу был осуществлен не корректно');
        }

        $amount = 0;
        $orderNew = new Order();
        $orderProduct = new OrderProduct();
        $session = \Yii::$app->session->get('cart');

        $orderLastId = Order::find()
            ->max('id');

        $products = Product::find()
            ->where(['IN', 'id', array_keys($session)])
            ->all();

        foreach ($products as $product) {
            $amount += $product->price * $session[$product->id];
        }

        if ($orderNew->load(\Yii::$app->request->post())) {
            $orderNew->price = $amount;
            $transaction = \Yii::$app->getDb()->beginTransaction();

            if (!$orderNew->save() || !$orderProduct->saveOrderProducts($products, $orderLastId)) {
                $transaction->rollBack();

                // TODO: make a redirect on alert page
                echo 'err';
            } else {
                $transaction->commit();

                /**
                 * NOTE:
                 * send mail, equal - mail('address', 'title', 'content')
                 * view order look in the -> ../mail/order.php
                 */
                \Yii::$app->mailer
                    ->compose('order', compact('products', 'session'))
                    ->setFrom([\Yii::$app->params['senderEmail'] => \Yii::$app->params['senderName']])
                    ->setTo([
                        $orderNew->email,
                        \Yii::$app->params['adminEmail']
                    ])
                    ->setSubject('ПФК - заказ с сайта')
                    ->send();

                \Yii::$app->cart->clear();

                return \Yii::$app->response->redirect(['alert/index', 'id' => 'PageOk']);
            }
        }

        return $this->goHome();
    }
}
