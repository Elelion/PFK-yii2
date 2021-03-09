<?php


namespace app\widgets;


use yii\base\Widget;


/*
 * NOTE:
 *
 * Widget for output of the slider(s) on main page
 *
 * @package app\widgets
 * */
class JumbotronWidget extends Widget
{
    public $currentJumbotron;

    public function run()
    {
        return $this->render('jumbotron', ['jumbotron' => $this->currentJumbotron]);
    }
}
