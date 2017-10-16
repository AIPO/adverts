<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Advert;


class AdvertsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //destroy previous values
        Advert::truncate();

        factory(App\User::class, 50)->create()->each(function ($u) {
            $u->posts()->save(factory(App\Advert::class)->make());
        });

    }
}
