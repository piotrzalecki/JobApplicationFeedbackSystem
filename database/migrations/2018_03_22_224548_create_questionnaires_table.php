<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionnairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionnaires', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('questions_number');
            $table->string('question_1');
            $table->string('question_2');
            $table->string('question_3');
            $table->string('question_4')->nullable();
            $table->string('question_5')->nullable();
            $table->string('question_6')->nullable();
            $table->string('question_7')->nullable();
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
        Schema::dropIfExists('questionnaires');
    }
}
