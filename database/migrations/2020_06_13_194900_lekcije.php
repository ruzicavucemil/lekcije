<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Lekcije extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lekcija', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('predmet_id')->unsigned();
            $table->bigInteger('kategorijaL_id')->unsigned();
            $table->bigInteger('korisnik_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            
            $table->foreign('predmet_id')->references('id')->on('predmeti');
            $table->foreign('kategorijaL_id')->references('id')->on('kategorija_lekcija');
            $table->foreign('korisnik_id')->references('id')->on('users');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lekcija');
        //
    }
}
