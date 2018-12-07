<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
	return [
		'productName' => $faker->name,
		'price' => $faker->randomFloat(2, 100, 999999),
		'model' => $faker->imageUrl(320, 240, 'cats'),
    'brand' => $faker->imageUrl(320, 240, 'cats'),
    'model' => $faker->imageUrl(320, 240, 'cats'),// lorempixel.com
 	];
});
