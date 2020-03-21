<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Questionoptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questionoptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('question_id');
            $table->string('title')->nullable();
            $table->unsignedTinyInteger('correct')->nullable();
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
        //
    }
}
