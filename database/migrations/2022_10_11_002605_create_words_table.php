<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('words', function (Blueprint $table) {
            $table->id();
            $table->string('words');
            $table->unsignedBigInteger('difficulties_id');
            $table->unsignedBigInteger('languages_id');
            $table->timestamps();
            $table->string('created_by');
            $table->softDeletes();
            $table->foreign('difficulties_id')
              ->references('id')->on('difficulties');
            $table->foreign('languages_id')
              ->references('id')->on('languages');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('words');
    }
}
