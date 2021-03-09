<?php

namespace app\components;

class Search
{
    public function add($request = null)
    {
        $id = 0;
        $search = \Yii::$app->session->get('search', []);

        $search[$id] = $request;

        \Yii::$app->session->set('search', $search);
    }
}