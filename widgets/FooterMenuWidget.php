<?php


namespace app\widgets;


use yii\base\Widget;


/**
 * NOTE:
 *
 * Widget for output bottom menu in the footer on the pages
 *
 * @package app\widgets
 */
class FooterMenuWidget extends Widget
{
    public function run()
    {
        return $this->render('footerMenu');
    }
}
