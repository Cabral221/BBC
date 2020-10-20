<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RefactFiliereColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('filieres', function (Blueprint $table) {
            $table->integer('program_id')->nullable()->change();
            $table->string('icon')->nullable()->change();
            $table->string('libele')->nullable()->change();
            $table->string('slug')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('filieres', function (Blueprint $table) {
            //
        });
    }
}
