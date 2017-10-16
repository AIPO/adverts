<?php

use Faker\Generator as Faker;
use App\Advert;

$factory->define(App\Advert::class, function (Faker $faker) {
    return [
            'user_id' => function(){
        return factory('App\User')->create()->id;
            },
            'name' => $faker->sentence(5),
            'description' => $faker->word,
            'image' => 'test.png',
            'type' => $faker->randomElements(['sell','buy']),
            'category' => $faker->word,
            'price' => $faker->randomFloat(2,0,0)
    ];
});
