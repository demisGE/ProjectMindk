<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

use App\App;
require_once ('../vendor/autoload.php');

$app = new App(include("../config/config.php"));

$app->run();

$app->done();