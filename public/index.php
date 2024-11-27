<?php
if(PHP_MAJOR_VERSION < 8){
    die;
}
require_once __DIR__ . "/../config/config.php";
require_once ROOT . '/vendor/autoload.php';
require_once HELPERS . '/helpers.php';

$app = new \PHPFramework\Application();

dump(app());
dump(app()->request->get('page'));
//dump($app->request->getMethod());
//dump($app->request->get('page'));
