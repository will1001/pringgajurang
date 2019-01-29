<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PerilakuHidupBersihdanSehat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('perilaku_hidupe_bersih_dan_sehats', function (Blueprint $table) {
            $table->increments('id')->unique();;
            $table->string('deskripsi');
            $table->string('keterangan');
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
        Schema::dropIfExists('perilaku_hidupe_bersih_dan_sehats');
    }
}
