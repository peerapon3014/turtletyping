<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonpartNsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessonpart_ns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('content');
            $table->unsignedBigInteger('language_id');
            $table->unsignedBigInteger('lessontitle_id');
            $table->foreign('language_id')->references('id')->on('languages');
            $table->foreign('lessontitle_id')->references('id')->on('lessontitles');
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
        Schema::dropIfExists('lessonpart_ns');
    }
}
