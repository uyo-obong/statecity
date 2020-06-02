<?php

namespace Uyoobonga\StateCity\database\seeds;

use Illuminate\Database\Seeder;

class StateCityTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CityTableSeeder::class);
         $this->call(StateTableSeeder::class);
    }
}
