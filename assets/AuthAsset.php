<?php

namespace app\assets;

use yii\web\AssetBundle;

class AuthAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        '_adminLTE-2.4.18/bower_components/font-awesome/css/font-awesome.min.css',
        '_adminLTE-2.4.18/bower_components/Ionicons/css/ionicons.min.css',
        '_adminLTE-2.4.18/dist/css/AdminLTE.min.css',
        '_adminLTE-2.4.18/plugins/iCheck/square/blue.css',

        // NOTE: fonts
        '//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic',
    ];

    public $js = [
        '_adminLTE-2.4.18/plugins/iCheck/icheck.min.js',
        'js/admin.js'
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
