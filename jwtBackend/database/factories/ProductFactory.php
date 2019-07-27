<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word(3),
        'image' => '\uploades\products\book1.png',
        'description' => $faker->sentence(4),
        'price' => $faker->numberBetween(5,100000)
    ];
});
