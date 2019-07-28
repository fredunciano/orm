<?php

use Illuminate\Database\Capsule\Manager as Capsule;

require_once "vendor/autoload.php";
// require_once '/fzaninotto/faker/src/autoload.php';

$capsule = new Capsule();

$capsule->addConnection([

   "driver" => "mysql",
   "host" =>"127.0.0.1",
   "database" => "orm",
   "username" => "root",
   "password" => ""

]);

//Make this Capsule instance available globally.
$capsule->setAsGlobal();

// Setup the Eloquent ORM.
$capsule->bootEloquent();
$capsule->bootEloquent();