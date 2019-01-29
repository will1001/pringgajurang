<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PendapatanPerKapita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('pendapatan_per_kapitas', function (Blueprint $table) {
            $table->increments('id')->unique();;
            $table->string('Bidang');
            $table->integer('total_pendapatan');
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
           Schema::dropIfExists('pendapatan_per_kapitas');
    }
}
