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
<<<<<<< HEAD
=======
        'avatar' => $faker->imageUrl(256, 256),
>>>>>>> 8b6225fb2776ae8486b67e766e73ca63cf4ec475
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});
<<<<<<< HEAD
=======

$factory->define(App\Article::class, function (Faker\Generator $faker) {
    $ids = \App\User::pluck('id')->toArray();

    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
        'user_id' => $faker->randomElement($ids),
    ];
});
>>>>>>> 8b6225fb2776ae8486b67e766e73ca63cf4ec475
