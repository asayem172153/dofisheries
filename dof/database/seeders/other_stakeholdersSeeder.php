<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class other_stakeholdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        foreach(range(1,600) as $value){
            DB:: table('other_stakeholders') ->insert([
                'id'=>$value,
                'name'=>$faker->name,
                'age'=>$faker->numberBetween(22,60),
                'gender'=>$faker->randomElement(['male','female']),
                'religion'=>$faker->randomElement(['muslim','hindu','muslim','christian','muslim']),
                'phone'=>$faker->phoneNumber,
                'nid'=>$faker->numberBetween(1000000000,9999999999),
                'address'=>$faker->streetAddress,
                'upazila_id'=>$faker->numberBetween(1,491),
                'education'=>$faker->randomElement(['BSC','MSC','PHD','MBA','SSC','HSC','JSC','JDC','ALIM','DAKHIL']),
                'profession'=>$faker->randomElement(['officer','staff','fisherman','others']),
                'experience'=>$faker->numberBetween(0,40),
                'grade'=>$faker->numberBetween(0,14),
            ]);
        }
    }
}
