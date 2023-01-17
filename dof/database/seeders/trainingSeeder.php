<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class trainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        foreach(range(1,293) as $value){
            DB:: table('training') ->insert([
                'id'=>$value,
                'title'=>$faker->randomElement(['In-house training on hygiene practices and measures to control dengue and Aedes mosquitoes during the COVID-19',
                'In-house training on e-document management','Training on Biofloc Fisheries - 1st Batch','Training on Project Appraisal and Formulation of DPP-1st Batch','Cyber Security Awareness Training-1st Batch','Training on fish hatchery and nursery management',
                'Public Procurement Management Training',
                'In-house training on Government Service Conduct Rules, 2019 and Regular Attendance of Government Service, 2019',
                'All Acts and Ordinances relating to Batch Fisheries 1st Batch', 
                'Entry Level Officers of Fisheries Department', 
                'Training on Biofloc Fisheries - 2nd Batch', 
                'In-house training on National Sanitation Strategy', 
                'Training on Public Administration & Governance - 2nd Batch',
                'Module Formulation Workshop for ToT Courses', 
                'Training on Fisheries Survey Methods - 2nd Batch', 
                'ToT Course on Training Method and Techniques-1st Batch', 
                'Advanced Course on Administration and Module development workshop for training course on Development', 
                'In-house training on Self-Tax Assessment and Tax Return Preparation', 
                'Course on Administration and Development (ACAD)', 'Basic Training Course for Entry Level Officers of Fisheries Department-2nd Batch', 
                'In-house training on various types of register management', 
                'Training on Project Appraisal and Formulation of DPP-2nd Batch',
                'All Acts and Ordinances relating to Fisheries-2nd Batch',
                'ToT Course on Training Method and Techniques-2nd Batch', 
                'In-house training on smart reporting systems', 
                'Training on Public Financial Management', 
                'Training on Modern Office Management', 
                'In-house training on usage of web portal, PDS & PMIS', 
                'Food safety, Fish Inspection and Quality Assurance training', 
                'Information and Communication Technology (ICT)-related training', 
                'Value Chain Management of Economically Important Fisheries Species',
                'In-house training on Government Servants (Procedure and Appeal) Rules, 2018']),
                'category_id'=>$faker->numberBetween(1,79),
                'sub_category_id'=>$faker->numberBetween(1,29),
                'training_center_id'=>$faker->numberBetween(1,500),
                'batch'=>$faker->numberBetween(1,5),
                'number_of_trainee'=>$faker->numberBetween(50,500),
                'upazila_id'=>$faker->numberBetween(1,491),
                'duration'=>$faker->numberBetween(1,90),
                'per_day_hour'=>$faker->numberBetween(1,3),
                'total_hour'=>$faker->numberBetween(1,270),
                'trainer_id'=>$faker->numberBetween(1,487),
                'cost_bdt'=>$faker->numberBetween(100000,90000000),
                'start_date'=>$faker->dateTimeBetween('2011-01-01','2022-10-30'),
                'end_date'=>$faker->dateTimeBetween('2011-02-01','2022-12-31'),
                'rating'=>$faker->numberBetween(0,5),
                
            ]);
        }
    }
    
}
