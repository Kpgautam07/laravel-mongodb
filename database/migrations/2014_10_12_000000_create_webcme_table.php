<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebcmeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webcme', function (Blueprint $table) {
            $table->id();
            $table->string('webcmeTitle')->nullable();
            $table->date('webcmeDate')->nullable();
            $table->string('webcmeUrl')->nullable();
            $table->string('webcmevideourl')->nullable();
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
        Schema::dropIfExists('webcme');
    }
}
