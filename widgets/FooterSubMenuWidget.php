<?php


namespace app\widgets;


use app\models\Subscribe;
use yii\base\Widget;


/**
 * NOTE:
 *
 * Widget for output bottom menu in the footer on the pages
 *
 * @package app\widgets
 */
class FooterSubMenuWidget extends Widget
{
    public function run()
    {
        $subscribe = new Subscribe;
        return $this->render('footerSubMenu', ['subscribe' => $subscribe]);
    }
}
