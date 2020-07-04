<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(2),
        'brief' => $faker->sentence(5),
        'body' =>  $faker->sentence(20),
        'image' => 'images/default-product.jpg',
    ];
});
