<?php


namespace app\controllers;


use app\models\ServiceCategory;
use yii\web\Controller;

class AppController extends Controller
{
    protected function setMeta($title = null, $description = null, $keywords = null)
    {
        $this->view->title = $title;

        $this->view->registerMetaTag([
            'name' => 'description',
            'content' => $description]);

        $this->view->registerMetaTag([
            'name' => 'keywords',
            'content' => $keywords]);
    }

    protected function getHomeUrl()
    {
        return 'http://proffurkom.ru';
    }
}