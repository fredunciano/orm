<?php



require "app/init.php";


// $user = User::Create(['name' => "Kshiitj Soni",    'email' => "kshitij206@gmail.com",    'password' => password_hash("1234",PASSWORD_BCRYPT), ]);

// print_r(User::todo()->create([

//    'todo' => "Working with Eloquent Without PHP",

//    'category' => "eloquent",

//    'description' => "Testing the work using eloquent without laravel"

//    ]));
// $faker = Faker\Factory::create();
// $count = 50;
// while($count > 0){
// 	$user = User::Create(['name' =>  $faker->name,    'email' =>  $faker->email,    'password' => password_hash($faker->text,PASSWORD_BCRYPT), ]);
// 	$count--;
// }



use Illuminate\Database\Capsule\Manager as Capsule;
// // class UserController(){



// // }

$users = Capsule::table('users')->where('id', '>', 25)->get();
dd($users);


