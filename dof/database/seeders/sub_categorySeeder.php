<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class sub_categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        foreach(range(1,17) as $value){
            DB:: table('sub_category') ->insert([
                'id'=>$value,
                'name'=>$faker->word,
                'category_id'=>$faker->numberBetween(1,47),

            ]);
        }
    }
}
