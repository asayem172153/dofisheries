<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            trainerSeeder::class,
            beneficiarySeeder::class,
            officer_staffSeeder::class,
            other_stakeholdersSeeder::class,
            trainee_enrollmentSeeder::class,
            trainingSeeder::class,
            categorySeeder::class,
            facilitySeeder::class,
            fundSeeder::class,
            monthly_yearly_targetSeeder::class,
            sub_categorySeeder::class,
            traineeSeeder::class,
            training_centerSeeder::class,
            training_demandSeeder::class,
        
        ]);
    }
}
