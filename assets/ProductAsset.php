<?php

namespace app\assets;

use yii\web\AssetBundle;

class ProductAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $js = [
        'js/jquery.min.js',
        'js/jquery.etalage.min.js',
        'js/productView.js',
        'js/productSlider.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
