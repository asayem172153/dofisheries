<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class fundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        foreach(range(1,120) as $value){
            DB:: table('fund') ->insert([
                'id'=>$value,
                'upazila_id'=>$faker->numberBetween(1,491),
                'fund_amount'=>$faker->numberBetween(80000,130000000),
                'fund_type'=>$faker->randomElement(['Project','Training','Development','Training','Audit','Training']),
                'date'=>$faker->dateTimeBetween('2011-01-01','2022-12-30'),

            ]);
        }
    }
}
