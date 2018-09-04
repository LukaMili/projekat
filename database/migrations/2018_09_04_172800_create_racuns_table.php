<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRacunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('racuns', function (Blueprint $table) {
              $table->increments('id');
            $table->double('ukupanIznos');
            $table->integer('user_id')->unsigned()->nullable();
            $table->index('user_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('racuns');
    }
}
