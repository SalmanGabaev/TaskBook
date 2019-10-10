<?php

define('DEBUG', 1);
define('ROOT', dirname(__DIR__));
define('WWW', ROOT . '/public');
define('APP', ROOT . '/app');
define('CORE', ROOT . '/core');
define('LIBS', ROOT . '/core/libs');
define('LAYOUT', 'taskBook');
define('CONF', ROOT . '/config');


/**
 * Получаем URL-Аддресс
 */
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";
$app_path = preg_replace('#[^/]+$#', '', $app_path);
$app_path = str_replace('/public/', '', $app_path);

define('PATH', $app_path);
define('ADMIN', PATH . '/admin');

require_once ROOT . '/vendor/autoload.php';