<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filieres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('program_id');
            $table->string('icon');
            $table->string('libele');
            $table->text('describe');
            $table->text('duration');
            $table->text('requirement');
<<<<<<< HEAD
            $table->string('outCome');
=======
            $table->text('outCome');
>>>>>>> 44c8856871d282fb03d8a4e0f03d92da647038bf
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
        Schema::dropIfExists('filieres');
    }
}
