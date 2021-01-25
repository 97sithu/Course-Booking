<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name'=$faker->sentence,
        'phone_no'=$faker->phoneNumber,
        'email'=$faker->safeEmail,
        'address'=$faker->address,
        'course_id'=rand(1,20),
    ];
});
