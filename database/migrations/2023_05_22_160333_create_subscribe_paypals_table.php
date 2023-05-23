<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribe_paypals', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('payerstatus');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('countrycode');
            $table->string('currencycode');
            $table->string('amt');
            $table->unsignedBigInteger('user_id');
            $table->timestamp('enddate');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('subscribe_paypals');
    }
};
