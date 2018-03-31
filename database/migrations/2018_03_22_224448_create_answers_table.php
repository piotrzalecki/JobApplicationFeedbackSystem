<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('feedback_id');
            $table->integer('answer_1');
            $table->integer('answer_2');
            $table->integer('answer_3');
            $table->integer('answer_4')->nullable();
            $table->integer('answer_5')->nullable();
            $table->integer('answer_6')->nullable();
            $table->integer('answer_7')->nullable();
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
        Schema::dropIfExists('answers');
    }
}
