<?php

use Faker\Generator as Faker;
use App\Advert;

$factory->define(App\Advert::class, function (Faker $faker) {
    return [
            'user_id' => function(){
        return factory('App\User')->create()->id;
            },
            'name' => $faker->sentence,
            'description' => $faker->paragraph(mt_rand(5, 15)),
            'image' => 'test.png',
            'type' => $faker->randomElements(['sell','buy']),
            'category' => $faker->word,
            'price' => $faker->randomFloat(2)
    ];
});
