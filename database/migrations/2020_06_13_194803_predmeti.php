<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Predmeti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predmeti', function (Blueprint $table) {
            $table->id();
            $table->string('naziv',50);
            $table->bigInteger('godina_id')->unsigned();
            $table->bigInteger('kategorijaP_id')->unsigned();
            $table->timestamp('failed_at')->useCurrent();
            $table->softDeletes();

            $table->foreign('godina_id')->references('id')->on('godine');
            $table->foreign('kategorijaP_id')->references('id')->on('kategorija_predmeta');
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
        Schema::dropIfExists('predmeti');
        //
    }
}
