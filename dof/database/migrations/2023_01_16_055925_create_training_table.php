<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->integer('training_center_id');
            $table->integer('batch');
            $table->integer('number_of_trainee');
            $table->integer('upazila_id');
            $table->integer('duration');
            $table->integer('per_day_hour');
            $table->integer('total_hour');
            $table->integer('trainer_id');
            $table->integer('cost_bdt');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('rating');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('training');
    }
};
