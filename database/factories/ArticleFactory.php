<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use App\User;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'user_id' => User::find(1)->id,
        'title' => $faker->jobTitle,
        'description' => $faker->text
    ];
});
