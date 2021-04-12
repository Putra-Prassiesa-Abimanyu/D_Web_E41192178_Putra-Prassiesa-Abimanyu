<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kosakata');
            $table->string('ngoko_lugu');
            $table->string('ngoko_alus');
            $table->string('krama_madya');
            $table->string('krama_inggil');
            $table->string('contoh_kalimat');
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
        Schema::dropIfExists('jawa');
    }
}
