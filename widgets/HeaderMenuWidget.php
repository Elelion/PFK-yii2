<?php


namespace app\widgets;


use yii\base\Widget;


/**
 * NOTE:
 *
 * Widget for output of the header top menu on layout
 *
 * @package app\widgets
 */
class HeaderMenuWidget extends Widget
{
    public function run()
    {
        return $this->render('headerMenu');
    }
}