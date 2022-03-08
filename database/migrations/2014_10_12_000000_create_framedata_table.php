<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFramedataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('framedata', function (Blueprint $table) {
            $table->id();
            $table->string('frameName')->nullable();
            $table->string('frameDoctor')->nullable();
            $table->string('frameProfile')->nullable();
            $table->string('frameMobile')->nullable();
            $table->string('frameClinic')->nullable();
            $table->string('frameAddress')->nullable();
            $table->string('frameCity')->nullable();
            $table->string('framePincode')->nullable();
            $table->string('frameState')->nullable();
            $table->string('frameBooking')->nullable();
            $table->string('frameContact')->nullable();
            $table->string('framePayment')->nullable();
            $table->string('frameMorningtime')->nullable();
            $table->string('frameEveningtime')->nullable();
            $table->text('frameCard')->nullable();
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
        Schema::dropIfExists('framedata');
    }
}
