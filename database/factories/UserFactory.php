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
        'name' => 'Piotr',
        'email' => 'piotr@piotr.pl',
        'password' => bcrypt('123456'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Address::class, function (Faker $faker) {
    return [
        'city_name' => $faker->city,

    ];
});

$factory->define(App\Company::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
    ];
});

$factory->define(App\Position::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});

$factory->define(App\Application::class, function (Faker $faker) {
    return [
        'company_id' => $faker->numberBetween(1,5),
        'position_id' => $faker->numberBetween(1,5),
        'address_id' => $faker->numberBetween(1,5),

    ];
});


