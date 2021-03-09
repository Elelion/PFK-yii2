<?php


namespace app\widgets;


use yii\base\Widget;

/**
 * NOTE:
 *
 * Widget for output of the banner(s) on main page
 *
 * @package app\widgets
 */
class BannerWidget extends Widget
{
    public $currentBanner;

    public function run()
    {
        return $this->render('banner', ['banner' => $this->currentBanner]);
    }
}
