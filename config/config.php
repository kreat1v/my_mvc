<?php // Конфигурационный файл.

// Debug режим.
Config::set('debug', true);

// Имя сайта.
Config::set('site_name', 'My Framework');

// Языковые настройки.
Config::set('languages', ['en', 'fr']);

// Роуты. Route name => method prefix
Config::set('routes', [
    'default' => '',
    'admin' => 'admin_',
]);

// Default настройки.
Config::set('default_route', 'default');
Config::set('default_language', 'en');
Config::set('default_controller', 'pages');
Config::set('default_action', 'index');

// Настройки БД.
Config::set('db.host', 'localhost');
Config::set('db.user', 'root');
Config::set('db.password', '');
Config::set('db.db_name', 'my_mvc');