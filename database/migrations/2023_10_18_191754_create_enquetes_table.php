<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquetes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('code');
            $table->string('date_cover');
            $table->string('violence_type');
            $table->string('nature');
            $table->string('identity');
            $table->string('orientation');
            $table->string('age');
            $table->string('let');
            $table->string('occupation');
            $table->string('country');
            $table->string('town');
            $table->string('quater');
            $table->string('date_incident');
            $table->string('place_incident');
            $table->string('source');
            $table->string('collect_mode');
            $table->string('passing_state');
            $table->string('author');
            $table->string('refered_for');
            $table->string('organisation');
            $table->string('details');
            $table->string('thing_done');
            $table->string('thought');
            $table->string('waiting');
            $table->string('thing_to_be_done');
            $table->string('recieved_service');
            $table->string('thought_service');
            $table->string('thought_survivor');
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
        Schema::dropIfExists('enquetes');
    }
}
