<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class trainee_enrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        foreach(range(1,5837) as $value){
            DB:: table('trainee_enrollment') ->insert([
                'id'=>$value,
                'trainee_id'=>$faker->numberBetween(1,5000),
                'training_id'=>$faker->numberBetween(1,293),
            ]);
        }
    }
}
