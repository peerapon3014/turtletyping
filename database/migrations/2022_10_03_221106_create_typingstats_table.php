<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypingstatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typingstats', function (Blueprint $table) {
            $table->string('user_id');
            $table->string('difficulty_id');
            $table->string('language_id');
            $table->integer('wpm');
            $table->integer('acc');
            $table->integer('raw');
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
        Schema::dropIfExists('typingstats');
    }
}