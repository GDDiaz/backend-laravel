<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\post;
use Faker\Generator as Faker;

$factory->define(post::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'title'   => $faker->sentence,
        'body'   => $faker->text(800),
    ];
});
