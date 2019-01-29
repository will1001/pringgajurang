<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PendapatanRillKeluarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pendapatan_rill_keluargas', function (Blueprint $table) {
            $table->increments('id')->unique();;
            $table->string('anggota_keluarga');
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
        //
        Schema::dropIfExists('pendapatan_rill_keluargas');
    }
}
