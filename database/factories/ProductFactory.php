<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
                'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'category_id' => $faker->numberBetween($min = 1, $max = 3),
                'price'  => $faker->numberBetween($min = 50, $max = 9000),
                'quantity'  => $faker->numberBetween($min = 1, $max = 100) ,

    ];
});
