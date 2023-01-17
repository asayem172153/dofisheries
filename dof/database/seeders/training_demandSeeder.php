<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class training_demandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        foreach(range(1,500) as $value){
            DB:: table('training_demand') ->insert([
                'id'=>$value,
                'upazila_id'=>$faker->numberBetween(1,491),
                'category_id'=>$faker->numberBetween(1,47),
                'demand'=>$faker->numberBetween(20,250),

            ]);
        }
    }
}
