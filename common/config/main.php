<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [

        'authManager' => [
            'class' => 'common\components\MyManager',
        ],

        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@vendor/almasaeed2010/adminlte/pages'
                ],
            ],
        ],

        'assetManager' => [
            'bundles' => [
                'dmstr\web\AdminLteAsset' => [
                    'skin' => 'skin-green',
                ],
            ],
        ],

        'authManager' => [
            'class' => 'dektrium\rbac\components\DbManager',
            'defaultRoles' => ['admin', 'user', 'editor'],
        ],
    ],

    'modules' => [
        'user' => [
            'class' => 'dektrium\user\Module',
            'enableUnconfirmedLogin' => true,
            'enableGeneratingPassword' => true,
            'enablePasswordRecovery' => true,
            'enableConfirmation' => false,
            'confirmWithin' => 21600,
            'cost' => 12,
            'admins' => ['admin'],
        ],

        'rbac' => 'dektrium\rbac\RbacWebModule',
    ],
];
