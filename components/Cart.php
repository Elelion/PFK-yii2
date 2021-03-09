<?php

namespace app\components;

class Cart
{
    public function add($id, $amount = 1)
    {
        $cart = \Yii::$app->session->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id] += $amount;
        } else {
            $cart[$id] = $amount;
        }

        \Yii::$app->session->set('cart', $cart);
    }

    public function drop($id)
    {
        $cart = \Yii::$app->session->get('cart', []);
        unset($cart[$id]);

        \Yii::$app->session->set('cart', $cart);
    }

    public function update($id, $amount)
    {
        $cart = \Yii::$app->session->get('cart', []);
        $cart[$id] = $amount;

        \Yii::$app->session->set('cart', $cart);
    }

    public function clear()
    {
        \Yii::$app->session->set('cart', []);
    }
}