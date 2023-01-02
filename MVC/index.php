<?php
require 'vendor/autoload.php';

use Ahmed\Mvc\Env\Env;
use Ahmed\Mvc\Database\DB;

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();







// $data = DB::table('categories')->select()->all();

// echo "<pre>";
// print_r($data);


echo Env::env("DB_HOST");
