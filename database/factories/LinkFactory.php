<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Database\Eloquent\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'link' => $faker->url,
    ];
});
