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
        Schema::table('origins', function (Blueprint $table) {
            //$table->integer('expedido')->unsigned();
            $table->foreign('raza')->references('id')->on('razas');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('origins', function($table){
            $table->dropForeign('raza');
        });
    }
};
