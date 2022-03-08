<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebinarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webinar', function (Blueprint $table) {
            $table->id();
            $table->string('webinarTitle')->nullable();
            $table->string('webinarsubTitle')->nullable();
            $table->date('webinarDate')->nullable();
            $table->string('webinarUrl')->nullable();
            $table->string('webinarvideourl')->nullable();
            $table->string('webinarImage')->nullable();
            $table->string('webinarImage1')->nullable('255');
            $table->enum('status',['Active','InActive'])->default('Active'); 
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
        Schema::dropIfExists('webinar');
    }
}
