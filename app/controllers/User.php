<?php
require "C:/xampp/htdocs/orm/app/init.php";
use Illuminate\Database\Capsule\Manager as Capsule;

class UserController
{

public function getUser(){
	// $users = Capsule::table('users')->where('id', '=', 25)->get();
	// dd($users);
	print_r($_SERVER['PWD']);
}


}

$user = new UserController();
$user->getUser();
