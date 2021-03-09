<?php


namespace app\models;


use yii\base\Model;

class Cart extends Model
{
//    public function addToCart($product, $quality = 1)
//    {
//        if (isset($_SESSION['cart'][$product->id])) {
//            $_SESSION['cart'][$product->id]['quality'] += $quality;
//        } else {
//            $_SESSION['cart'][$product->id] = [
//                'title' => $product->title,
//                'price' => $product->price,
//                'quality' => $quality,
//                'img' => $product->img,
//            ];
//        }
//
//        $_SESSION['cart.quality'] = isset($_SESSION['cart.quality'])
//            ? $_SESSION['cart.quality'] + $quality
//            : $quality;
//
//        $_SESSION['cart.sum'] = isset($_SESSION['cart.sum'])
//            ? $_SESSION['cart.sum'] + $quality * $product->price
//            : $quality * $product->price;
//    }
}