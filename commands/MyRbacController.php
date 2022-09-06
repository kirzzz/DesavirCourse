<?php

namespace app\commands;

use Yii;
use yii\console\Controller;

/**
 * Инициализатор RBAC выполняется в консоли php yii my-rbac/init
 */
class MyRbacController extends Controller {

    public function actionInit() {
        $auth = Yii::$app->authManager;

        $auth->removeAll(); //На всякий случай удаляем старые данные из БД...

        // Создадим роли админа и редактора новостей
        $developer = $auth->createRole('developer');
        $admin = $auth->createRole('admin');
        $user = $auth->createRole('user');

        // запишем их в БД
        $auth->add($admin);
        $auth->add($user);
        $auth->add($developer);

        // Создаем разрешения. Например, просмотр админки viewAdminPage и редактирование новости updateNews
        $AdminController = $auth->createPermission('adminController');
        $AdminController->description = 'Просмотр админки';

        $UserController = $auth->createPermission('userController');
        $UserController->description = 'Просмотр личного кабинета пользователя';

        // Запишем эти разрешения в БД
        $auth->add($AdminController);
        $auth->add($UserController);

        // Теперь добавим наследования. Для роли editor мы добавим разрешение updateNews,
        // а для админа добавим наследование от роли editor и еще добавим собственное разрешение viewAdminPage

        // Роли «Редактор новостей» присваиваем разрешение «Редактирование новости»
        $auth->addChild($user,$UserController);

        // админ наследует роль редактора новостей. Он же админ, должен уметь всё! :D
        $auth->addChild($admin, $user);

        // Еще админ имеет собственное разрешение - «Просмотр админки»
        $auth->addChild($admin, $AdminController);
    }
}