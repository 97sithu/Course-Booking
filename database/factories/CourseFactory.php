<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name'=$faker->sentence,
        'group'=$faker->sentence,
        'lecturer'=$faker->sentence,
        'language_id'=rand(1,3),
        'start_date'=$faker->date,
        'remark'=$faker->paragraph,
        'user_id'=rand(1,2),

    ];
});
