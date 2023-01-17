<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class facilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        foreach(range(1,10) as $value){
            DB:: table('facility') ->insert([
                'id'=>$value,
                'name'=>$faker->randomElement(['Facility-1','Facility-2','Facility-3','Facility-4','Facility-5','Facility-6','Facility-7','Facility-8','Facility-9','Facility-10']),

            ]);
        }
    }
}
