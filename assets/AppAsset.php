<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        // NOTE: styles
        'css/bootstrap.css',
        'css/etalage.css',
        'css/form.css',
        'css/style.css',

        // NOTE: fonts
        '//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800',
    ];

    public $js = [
        // NOTE: lib scripts
//        'js/bootstrap.min.js',
//        'js/bootstrap.js',

//        'js/jquery-3.5.1.js',
        'js/jquery.etalage.min.js',
        'js/jquery.flexisel.js',
//        'js/jquery.min.js',

        // NOTE: for slider on home page
        'js/jquery.wmuSlider.js',
        'js/Jumbotron.js',

        // NOTE: for compact menu on mobile version
        'js/CatalogMenu.js',

        // NOTE: for active search button
        'js/CatalogSearch.js',

        // NOTE: scripts for products
        'js/ProductDeal.js',

        // NOTE: for product menu on home page (always in bottom!!!)
        'js/menuAccordion.js',

        // NOTE: for debug and temp deploy
        //'js/main.js',

        // TODO: delete it
        //'js/slider',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
        'yii\web\JqueryAsset',
    ];

    //public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
}
