<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bali', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kosakata');
            $table->string('kasar');
            $table->string('mider');
            $table->string('alus');
            $table->string('andap');
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
        Schema::dropIfExists('bali');
    }
}
