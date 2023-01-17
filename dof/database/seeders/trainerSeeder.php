<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class trainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        foreach(range(1,487) as $value){
            DB:: table('trainer') ->insert([
                'id'=>$value,
                'name'=>$faker->name,
                'age'=>$faker->numberBetween(25,60),
                'gender'=>$faker->randomElement(['male','female']),
                'religion'=>$faker->randomElement(['muslim','hindu','muslim','christian','muslim']),
                'phone'=>$faker->phoneNumber,
                'nid'=>$faker->numberBetween(1000000000,9999999999),
                'address'=>$faker->streetAddress,
                'upazila_id'=>$faker->numberBetween(1,491),
                'education'=>$faker->randomElement(['BSC','MSC','PHP','MBA']),
                'designation'=>$faker->randomElement(['Departmental Trainer','Faculty','Subjective Expert','Trainer-001','Trainer-007']),
                'expertise'=>$faker->word,
                'tot_received_date'=>$faker->dateTimeBetween('2014-01-01','2022-12-31'),
                'organization'=>$faker->randomElement(['Planing','Fisheries','Shipping','Water','BRAC','BURO','Shakti','Proshika']),
                'grade'=>$faker->numberBetween(1,10),
                
            ]);
        }
    }
}
