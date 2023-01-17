<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class training_centerSeeder extends Seeder
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
            DB:: table('training_center') ->insert([
                'id'=>$value,
                'center_name'=>$faker->word,
                'contact_info'=>$faker->phoneNumber,
                'address'=>$faker->streetAddress,
                'upazila_id'=>$faker->numberBetween(1,491),
                'facility_id'=>$faker->numberBetween(1,10),

            ]);
        }
    }
}
