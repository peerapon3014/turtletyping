<?php

use App\Models\typingstat;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypingstatNsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typingstat_ns', function (Blueprint $table) {
            $table->id('typingstat_id');
            $table->unsignedBigInteger('difficulties_id');
            $table->unsignedBigInteger('languages_id');
            $table->unsignedBigInteger('User_id');
            $table->integer('wpm');
            $table->integer('acc');
            $table->integer('raw');
            $table->timestamps();
            
            $table->foreign('difficulties_id')
              ->references('id')->on('difficulties');
            $table->foreign('languages_id')
              ->references('id')->on('languages');
            $table->foreign('User_id')
              ->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('typingstat_ns');
    }
}
