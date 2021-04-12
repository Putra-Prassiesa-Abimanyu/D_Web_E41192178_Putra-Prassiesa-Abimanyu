<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaduraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('madura', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kosakata');
            $table->string('iya_enja');
            $table->string('engghi_enten');
            $table->string('engghi_bhunten');
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
        Schema::dropIfExists('madura');
    }
}
