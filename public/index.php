<?php

// Включение отображения ошибок (для разработки, можно отключить в продакшене)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Путь к корневой директории приложения
define('APP_ROOT', dirname(__DIR__));

// Подключение файла автозагрузки классов Composer
require_once APP_ROOT . '/vendor/autoload.php';

// Загрузка конфигурации
require_once APP_ROOT . '/app/config.php';

// Создание экземпляра класса Router
$router = new Router();

// Добавление маршрутов
$router->addRoute('/', 'TaskController', 'index');
$router->addRoute('/task/create', 'TaskController', 'create');
$router->addRoute('/task/edit', 'TaskController', 'edit');
$router->addRoute('/task/delete', 'TaskController', 'delete');
$router->addRoute('/auth/login', 'AuthController', 'login');
$router->addRoute('/auth/logout', 'AuthController', 'logout');

// Другие маршруты...

// Обработка текущего запроса
$router->dispatch($_SERVER['REQUEST_URI']);
