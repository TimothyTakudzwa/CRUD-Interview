<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->nullable($value = true);
            $table->string('last_name')->nullable($value = true);
            $table->date('DOB')->nullable($value = true);
            $table->integer('age')->nullable($value = true);
            $table->string('height')->nullable($value = true);
            $table->string('weight')->nullable($value = true);
            $table->string('hair_color')->nullable($value = true);
            $table->string('skin_color')->nullable($value = true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
