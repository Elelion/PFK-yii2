<?php


namespace app\widgets;


use app\models\ServiceCategory;
use yii\base\Widget;


/**
 * NOTE:
 *
 * Widget for output of the service category(s) on main page
 * on top, at the header panel
 *
 * @package app\widgets
 */
class ServiceCategoryWidget extends Widget
{
    public function run()
    {
        $servicesCategory = ServiceCategory::find()
            ->where(['active' => true])
            ->all();

        return $this->render('serviceCategory', ['srvCategory' => $servicesCategory]);
    }
}
