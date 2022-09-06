<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'app\commands',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
        '@tests' => '@app/tests',
    ],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
    ],
    'params' => $params,
    /*
    'controllerMap' => [
        'fixture' => [ // Fixture generation command line.
            'class' => 'yii\faker\FixtureController',
        ],
    ],
    */
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;

/**
 * @Migrations
 * php yii migrate/create create_book_table
 * php yii migrate --migrationPath=@yii/rbac/migrations
 * php yii migrate //For insert
 *
 * @Roles
 * php yii my-rbac/init //
 *
 * @FakeData
 * php yii migrate/create seed_book_table
 *
 * @Model
 * php yii gii/model --tableName=book --modelClass=Book
 *
 * @Controllers
 * php yii gii/controller --controllerClass=app\\controllers\\CourseController --baseClass=yii\\rest\\ActiveController
 *
 *
 */


