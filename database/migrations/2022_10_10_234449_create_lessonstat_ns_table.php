<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonstatNsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessonstat_ns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('User_id');
            $table->unsignedBigInteger('lessonpart_n_id');
            $table->integer('wpm');
            $table->integer('acc');
            $table->integer('raw');
            $table->foreign('user_id')
            ->references('id')->on('users');
            $table->foreign('lessonpart_n_id')
              ->references('id')->on('lessonpart_ns');
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
        Schema::dropIfExists('lessonstat_ns');
    }
}
