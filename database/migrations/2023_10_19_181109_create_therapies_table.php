<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTherapiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('therapies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('reason');
            $table->string('manage');
            $table->string('already_therap');
            $table->string('suicide');
            $table->string('impact');
            $table->string('tied');
            $table->string('enfance');
            $table->string('expectations');
            $table->string('sexual_orientation');
            $table->string('experiences');
            $table->string('conscience');
            $table->string('revelation');
            $table->string('situation');
            $table->string('divulgation');
            $table->string('perception');
            $table->string('stigmatisation');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('therapies');
    }
}
