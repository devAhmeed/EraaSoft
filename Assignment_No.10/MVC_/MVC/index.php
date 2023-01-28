<?php
require 'vendor/autoload.php';

use Ahmed\Mvc\Env\Env;
use Ahmed\Mvc\Database\DB;









$data = DB::table('categories')->select()->all();

echo "<pre>";
print_r($data);


// echo Env::env("DB_HOST");
