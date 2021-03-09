<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'defaultRoute' => 'home/index',
    'language' => 'ru-RU',
    'name' => 'Интернет-магазин ПФК, производство оконной продукции',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],

    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
             'defaultRoute' => 'main/index',

            /*
             * @note
             * connecting the template for the entire module
             */
            'layout' => 'admin',
        ],
    ],

    'components' => [

        /**
         * @note
         * for general formatter of our data, where
         *
         * d - day of month
         * F - month
         * Y - year
         * H - hour
         * i - minute
         * s - second
         */
        'formatter' => [
            'datetimeFormat' => 'php:d F Y H:i:s',
        ],

        /**
         * @note
         * for cart & search
         */
        'cart' => [
            'class' => 'app\components\Cart',
        ],
        'search' => [
            'class' => 'app\components\Search',
        ],


        'request' => [
            /**
             * @note
             * insert a secret key in the following (if it is empty) - this is required by cookie validation
             */
            'cookieValidationKey' => 'hhBWWk2HNRFg5goDu1ehFWtR39keuZ1E',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,

            /**
             * @note
             * for auth in modules\admin
             *
             * @fixme
             * change way after production
             */
            'loginUrl' => '/PFK-yii2-basic/web/admin/auth/login',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',

            /**
             * @note
             * send all mails to a file by default. You have to set
             * 'useFileTransport' to false and configure a transport
             * for the mailer to send real emails.
             */
            'useFileTransport' => false,

            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.yandex.ru',

                'username' => 'info@proffurkom.ru',
                'password' => 's6ks*#dj',

                'port' => '587',
                'encryption' => 'tls',
            ],

        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'home' => 'home/index',
                'about' => 'home/about',
                'banner/<id:\d+>' => 'home/banner',
                'delivery' => 'home/delivery',
                'jumbotron/<id:\d+>' => 'home/jumbotron',
                'vacancy' => 'home/vacancy',
                'news' => 'home/news',
                'payment' => 'home/payment',
                'refund' => 'home/refund-policy',
                'subscribe' => 'home/subscribe',

                'catalog/<id:\w+>' => 'catalog/view',
                'catalog' => 'catalog/index',

                'contacts' => 'home/contacts',

                'search' => 'catalog/search',

                'cart/add/<id:\w+>' => 'cart/add',
                'cart/drop/<id:\w+>' => 'cart/drop',

                'clear' => 'cart/clear',
                'view' => 'cart/view',
                'order' => 'cart/order',

                'services/<id:\w+>' => 'home/services',

                'product/<id:\d+>' => 'product/index',
            ],
        ],

    ],

    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
