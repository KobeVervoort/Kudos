<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => '',
        'email' => $faker->unique()->safeEmail,
        'avatar' => $faker->imageUrl($width = 400, $height = 400, 'people'),
        'avatar_original' => '',
        'remember_token' => str_random(10),
        'gender' => '',
        'token' => '',
    ];
});

$factory->state(App\User::class, 'male', function ($faker){
    return [
        'name' => $faker->firstNameMale . ' ' . $faker->lastName,
        'gender' => 'male'

    ];
});

$factory->state(App\User::class, 'female', function ($faker){
   return [
       'name' => $faker->firstNameFemale . ' ' . $faker->lastName,
       'gender' => 'female'
   ];
});
