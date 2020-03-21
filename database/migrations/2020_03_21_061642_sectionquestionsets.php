<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sectionquestionsets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectionquestionsets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('sclass_id')->nullable();
            $table->unsignedInteger('section_id')->nullable();
            $table->unsignedInteger('questionset_id')->nullable();
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
