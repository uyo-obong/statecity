<?php

namespace Uyoobonga\StateCity\database\seeds;

use Illuminate\Database\Seeder;
use Uyoobonga\StateCity\Http\Models\State;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = State::insert([
            ['id' => 1, 'code' => 'ABI', 'name' => 'Abia'],
            ['id' => 2, 'code' => 'ADA', 'name' => 'Adamawa'],
            ['id' => 3, 'code' => 'AKW', 'name' => 'Akwa Ibom'],
            ['id' => 4, 'code' => 'ANA', 'name' => 'Anambra'],
            ['id' => 5, 'code' => 'BAU', 'name' => 'Bauchi'],
            ['id' => 6, 'code' => 'BAY', 'name' => 'Bayelsa'],
            ['id' => 7, 'code' => 'BEN', 'name' => 'Benue'],
            ['id' => 8, 'code' => 'BOR', 'name' => 'Borno'],
            ['id' => 9, 'code' => 'CRO', 'name' => 'Cross River'],
            ['id' => 10, 'code' => 'DEL', 'name' => 'Delta'],
            ['id' => 11, 'code' => 'EBO', 'name' => 'Ebonyi'],
            ['id' => 12, 'code' => 'EDO', 'name' => 'Edo'],
            ['id' => 13, 'code' => 'EKI', 'name' => 'Ekiti'],
            ['id' => 14, 'code' => 'RIV', 'name' => 'Rivers'],
            ['id' => 15, 'code' => 'ENU', 'name' => 'Enugu'],
            ['id' => 16, 'code' => 'ABU', 'name' => 'Abuja'],
            ['id' => 17, 'code' => 'GOM', 'name' => 'Gombe'],
            ['id' => 18, 'code' => 'IMO', 'name' => 'Imo'],
            ['id' => 19, 'code' => 'JIG', 'name' => 'Jigawa'],
            ['id' => 20, 'code' => 'KAD', 'name' => 'Kaduna'],
            ['id' => 21, 'code' => 'KAN', 'name' => 'Kano'],
            ['id' => 22, 'code' => 'KAT', 'name' => 'Katsina'],
            ['id' => 23, 'code' => 'KEB', 'name' => 'Kebbi'],
            ['id' => 24, 'code' => 'KOG', 'name' => 'Kogi'],
            ['id' => 25, 'code' => 'KWA', 'name' => 'Kwara'],
            ['id' => 26, 'code' => 'LAG', 'name' => 'Lagos'],
            ['id' => 27, 'code' => 'NAS', 'name' => 'Nassarawa'],
            ['id' => 28, 'code' => 'NIG', 'name' => 'Niger'],
            ['id' => 29, 'code' => 'NIG', 'name' => 'Ogun'],
            ['id' => 30, 'code' => 'OND', 'name' => 'Ondo'],
            ['id' => 31, 'code' => 'OSU', 'name' => 'Osun'],
            ['id' => 32, 'code' => 'OYO', 'name' => 'Oyo'],
            ['id' => 33, 'code' => 'PLA', 'name' => 'Plateau'],
            ['id' => 34, 'code' => 'SOK', 'name' => 'Sokoto'],
            ['id' => 35, 'code' => 'TAR', 'name' => 'Taraba'],
            ['id' => 36, 'code' => 'YOB', 'name' => 'Yobe'],
            ['id' => 37, 'code' => 'ZAM', 'name' => 'Zamfara'],
        ]);
    }
}
