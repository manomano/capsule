<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});



$factory->define(App\client::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'first_name' => $faker->name,
        'last_name' => $faker->lastName,
 	    'email' => $faker->unique()->safeEmail,
 	    'pid' =>  '0'.rand(1000000000,9999999999),
        'personal_code' => $faker->word,
        'remember_token' => str_random(10),
        'age'=>$faker->random_int(8, 60),
         'gender'=>rand(0,1);

    ];
});
