<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class beneficiarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        foreach(range(1,1864) as $value){
            DB:: table('beneficiary') ->insert([
                'id'=>$value,
                'name'=>$faker->name,
                'age'=>$faker->numberBetween(18,60),
                'gender'=>$faker->randomElement(['male','female']),
                'religion'=>$faker->randomElement(['muslim','hindu','muslim','christian','muslim']),
                'phone'=>$faker->phoneNumber,
                'nid'=>$faker->numberBetween(1000000000,9999999999),
                'address'=>$faker->streetAddress,
                'upazila_id'=>$faker->numberBetween(1,491),
                'education'=>$faker->randomElement(['BSC','MSC','PHP','MBA','SSC','HSC','JSC','JDC','PSC','ALIM','DAKHIL']),
                'profession'=>'fisherman',
                'beneficiary_type'=>$faker->randomElement(['Industrial','Small_Scale','Commercial','Traditional']),
            ]);
        }
    }
}
