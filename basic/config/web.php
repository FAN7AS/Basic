<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';
setlocale(LC_ALL, 'RU');
$config = [
   
    'id' => 'basic',
    'layout'=>'main1',
    'name'=>'Курсовая работа',
    'basePath' => dirname(__DIR__),
     'language' => 'ru-RU',
    'bootstrap' => ['log'],

    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
      'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
        ],
    ],
    'components' => [
        'request' => [
           /**/
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '123456',
          
/*
           'baseUrl' => '',*/
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => 'index.php'
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
            'enableStrictParsing' => false,
            'rules' => [
               '/' => 'site/index',
                'site/<action:\w+>' => 'site/<action>',
               'course/querys' => 'course/querys',
               'course/<action:\w+>' => 'course/<action>',
               'admin/<action:\w+>' => 'admin/<action>',
               'admin/airport/<action:\w+>/<id:\d+>' => 'admin/airport/<action>',
               'admin/tour/<action:\w+>/<id:\d+>' => 'admin/tour/<action>',
               'admin/hotel/<action:\w+>/<id:\d+>' => 'admin/hotel/<action>',
               'admin/plane/<action:\w+>/<id:\d+>' => 'admin/plane/<action>',
               'admin/stock/<action:\w+>/<id:\d+>' => 'admin/stock/<action>',  
               'admin/flight/<action:\w+>/<id:\d+>' => 'admin/flight/<action>',
               'admin/tourists/<action:\w+>/<id:\d+>' => 'admin/tourists/<action>',
               'admin/course/querys' => 'course/querys',
               'admin' => 'admin/default/index',
             

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
