<?php

// FRONT COTROLLER

// 1. Общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Подключение файлов системы
define('ROOT', __DIR__);
require_once(ROOT.'/components/Router.php');
require_once(ROOT.'/components/Db.php');

// 3. Вызор Router
$router = new Router();
$router->run();

