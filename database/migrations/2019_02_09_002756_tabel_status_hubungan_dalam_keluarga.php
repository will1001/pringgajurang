<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelStatusHubunganDalamKeluarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tabel_status_hubungan_dalam_keluargas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status_hubungan_dalam_keluarga');
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
        Schema::dropIfExists('tabel_status_hubungan_dalam_keluargas');
    }
}
