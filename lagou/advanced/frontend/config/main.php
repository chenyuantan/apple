<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
         'mailer' => [ 
            'class' => 'yii\swiftmailer\Mailer', 
            'viewPath' => '@common/mail', 
            // send all mails to a file by default. You have to set 
            // 'useFileTransport' to false and configure a transport 
            // for the mailer to send real emails. 
            'useFileTransport' => false, 
            'transport' => [ 
                'class' => 'Swift_SmtpTransport', 
                'host' => 'smtp.163.com', 
                'username' => '792707278.com', 
                'password' => 'fhw439264.!fhw', 
                'port' => '465', 
                'encryption' => 'ssl', 
            ], 
            'messageConfig'=>[ 
                'charset'=>'UTF-8', 
                'from'=>['786069180@qq.com'=>'admin'] 
            ], 
        ], 
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */
    ],
    'params' => $params,
];
