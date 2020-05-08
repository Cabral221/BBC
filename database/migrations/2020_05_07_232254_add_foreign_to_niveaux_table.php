<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToNiveauxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::disableForeignKeyConstraints();
        Schema::table('niveaux', function (Blueprint $table) {
            $table->bigInteger('program_id')->unsigned()->index()->change();
            $table->foreign('program_id')->references('id')->on('programs')->onDelete('cascade');
        });
        // Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('niveaux', function (Blueprint $table) {
            //
        });
    }
}
