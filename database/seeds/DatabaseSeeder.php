<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Advert;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Advert::truncate();

        factory(App\User::class, 20)->create()->each(function ($u) {
            $u->adverts()->save(factory(App\Advert::class)->make());
        });
        // $this->call(UsersTableSeeder::class);
        //  $this->call(AdvertsTableSeeder::class);
    }
}
