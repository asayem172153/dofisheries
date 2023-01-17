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
        Schema::create('trainer', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('age');
            $table->string('gender');
            $table->string('religion');
            $table->string('phone');
            $table->integer('nid');
            $table->string('address');
            $table->integer('upazila_id');
            $table->string('education');
            $table->string('designation');
            $table->string('expertise');
            $table->date('tot_received_date');
            $table->string('organization');
            $table->integer('grade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainer');
    }
};
