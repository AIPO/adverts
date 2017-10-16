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
        factory(App\User::class, 50)->create()->each(function ($u) {
            $u->posts()->save(factory(App\Advert::class)->make());
        });

    }
}
