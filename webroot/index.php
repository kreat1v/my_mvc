<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('VIEW_PATH', ROOT.DS.'views');

require_once (ROOT.DS.'lib'.DS.'init.php');

try {
	App::run($_SERVER['REQUEST_URI']);
} catch (Exception $exception) {
	if (Config::get('debug')) {
		echo '<pre>', var_export($exception, 1), '</pre>';
	} else {

		echo 'Something gone wrong...';

	}
}

