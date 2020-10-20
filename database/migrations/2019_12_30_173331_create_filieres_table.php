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
            $table->integer('program_id')->nullable();
            $table->string('icon')->nullable();
            $table->string('libele')->nullable();
            $table->string('slug')->nullable();
            $table->text('describe');
            $table->text('duration');
            $table->text('requirement');
            $table->text('outCome');
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
