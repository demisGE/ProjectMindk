<?php

use App\App;
require_once ('../vendor/autoload.php');

$app = new App(include ("../app/config/config.php"));

print_r($app);
$app->run();

$app->done();