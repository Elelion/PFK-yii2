<?php


namespace app\widgets;


use yii\base\Widget;


/**
 * NOTE:
 *
 * Widget for output of the header top submenu on layout
 *
 * @package app\widgets
 */
class HeaderSubMenuWidget extends Widget
{
    public function run()
    {
        $session = \Yii::$app->session->get('cart');
        $cartQuantity = 0;

        if (!empty($session)) {
            $cartQuantity = count($session);
        }

        return $this->render('headerSubMenu', [
            'cartQuantity' => $cartQuantity,
        ]);
    }
}