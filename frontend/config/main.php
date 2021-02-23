<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'name'=>'Hello World',
    'bootstrap' => ['log','test'],
    'controllerNamespace' => 'frontend\controllers',
    'language'=>'az',
//    'defaultRoute'=>'site/signup',
    'modules'=>[
    ],
    'on beforeRequest'=>function($event){
        $a = $event->sender->name = "New App";
//        print_r($a);
    },

    'on beforeAction'=> function($event){
//        echo "Application before action method";
    },
    'components' => [
        'test'=>\frontend\components\Test::class,
//        'request' => [
//            'csrfParam' => '_csrf-frontend',
//            'parsers'=>[
//                'application/json'=>\yii\web\JsonParser::class
//            ]
//        ],
        'assetManager'=>[
            'class'=>\frontend\components\AssetManager::class
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
//        'session' => [
//            // this is the name of the session cookie used for login on the frontend
//            'name' => 'advanced-frontend',
//        ],
//        'log' => [
//            'traceLevel' => YII_DEBUG ? 3 : 0,
//            'targets' => [
//                [
//                    'class' => 'yii\log\FileTarget',
//                    'levels' => ['error', 'warning'],
//                ],
//            ],
//        ],
//        'errorHandler' => [
//            'errorAction' => 'site/error',
//        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                [
                    'class'=>\yii\rest\UrlRule::class,
                    'controller'=>['post','comment']
                ]
            ],
        ],
    ],
    'params' => $params,
];
