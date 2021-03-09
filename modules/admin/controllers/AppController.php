<?php


namespace app\modules\admin\controllers;


use yii\filters\AccessControl;
use yii\web\Controller;


class AppController extends Controller
{
    /** @fixme change URL for hosting */
    protected function writeHomeAdminUrlToParams()
    {
        $adminUrl = 'http://localhost:8888/PFK-yii2-basic/web/admin/control/index';
        \Yii::$app->params['homeAdminUrl'] = $adminUrl;
    }
}
