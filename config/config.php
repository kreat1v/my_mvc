<?php

Config::set('debug', true);

Config::set('site_name', 'My Framework');

Config::set('languages', ['en', 'fr']);

//Routes. Route name => method prefix
Config::set('routes', [
    'default' => '',
    'admin' => 'admin_',
]);

Config::set('default_route', 'default');
Config::set('default_language', 'en');
Config::set('default_controller', 'pages');
Config::set('default_action', 'index');

// Настройки базы данных
Config::set('db.host', 'localhost');
Config::set('db.user', 'root');
Config::set('db.password', '');
Config::set('db.db_name', 'my_mvc');