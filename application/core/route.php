<?php

class Route {

    //private $default_controller = 'Main';
    //private $default_action = 'index';

    private static $controller_prefix = 'Controller_';
    private static $action_prefix = 'action_';
    private static $model_prefix = 'Model_';

    static function start() {

        $controller_name = 'Main';
        $action_name = 'index';
	
		// Парсим URI и получаем из него имя контроллера и экшена
        $routes = explode('/', $_SERVER['REQUEST_URI']);

        if(!empty($routes[1])) {
            $controller_name = $routes[1];
        }

        if(!empty($routes[2])) {
            $action_name = $routes[2];
        }

        $model_name = self::$model_prefix.$controller_name;
        $controller_name = self::$controller_prefix.$controller_name;
        $action_name = self::$action_prefix.$action_name;

		// Подключаем файл модели
        $model_file = strtolower($model_name).EXT;
        $model_path = "application/models/".$model_file;
        if(file_exists($model_path)) {
            include "application/models".$model_file;
        }

		// Подключаем контроллер
        $controller_file = strtolower($controller_name).EXT;
        $controller_path = 'application/controllers/'.$controller_file;
        if(file_exists($controller_path)) {
            include "application/controllers/".$controller_file;
        } else die('Такого контроллера не существует!');
        //{
        //    Route::ErrorPage404();
        //}

        $controller = new $controller_name;
        $action = $action_name;

        if(method_exists($controller, $action)) {
            $controller->$action();
        } else die ('Такого экшена не существует!');
        //{
        //    Route::ErrorPage404();
        //}
    }

    function ErrorPage404() {
            $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
            header('HTTP/1.1 404 Not Found');
            header("Status: 404 Not Found");
            header('Location:'.$host.'404');
        }
}