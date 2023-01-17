<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class monthly_yearly_targetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        foreach(range(1,29) as $value){
            DB:: table('monthly_yearly_target') ->insert([
                'id'=>$value,
                'date_time'=>$faker->dateTimeBetween('2011-01-01','2022-10-30'),
                'planning'=>$faker->numberBetween(7,100),
                'completion'=>$faker->numberBetween(4,100),

            ]);
        }
    }
}
