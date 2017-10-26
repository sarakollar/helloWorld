<?php

error_reporting(0);
require_once 'vendor/autoload.php';

$app = new Silex\Application();

$app->get('/', function() use($app) {
return 'Hello World';
});

$app->run();