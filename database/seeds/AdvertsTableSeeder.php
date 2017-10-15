<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Advert;
use App\Category;


class AdvertsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        Advert::truncate();
        foreach (range(1, 10) as $i){
            $advert = Advert::create([
                'user_id' => $i,
                'name' => $faker->sentence,
                'description' => $faker->paragraph(mt_rand(5, 15)),
                'image' => 'test.png',
                'type' => $faker->randomElements(['sell','buy']),
                'category' => $faker->word,
                'price' => $faker->randomFloat(2,0,0)
                ]);

        }


    }
}
