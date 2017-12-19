<?php // Точка входа в наше приложение.

// Объявляем константы слэша, пути к нашему проекту, а так же пути к директории с представлениями.
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('VIEW_PATH', ROOT.DS.'views');

// Подключаем файл, инициилизирующий классы и подключающий все основные конфигурации.
require_once (ROOT.DS.'lib'.DS.'init.php');

// Запускаем наше приложение, а так же ловим возможные исключения.
try {
	App::run($_SERVER['REQUEST_URI']);
} catch (Exception $exception) {
	if (Config::get('debug')) {
		echo '<pre>', var_export($exception, 1), '</pre>';
	} else {

		echo 'Something gone wrong...';

	}
}