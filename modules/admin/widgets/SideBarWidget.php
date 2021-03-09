<?php


namespace app\modules\admin\widgets;


use yii\base\Widget;


/**
 * NOTE:
 *
 * Widget for output of the left panel on control panel
 *
 * Class SideBarWidget
 * @package app\modules\widgets
 */
class SideBarWidget extends Widget
{
    public function run()
    {
        return $this->render('sideBar');
    }
}
