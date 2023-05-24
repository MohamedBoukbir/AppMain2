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
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('helper_nationality')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('education_level')->nullable();
            $table->string('contract_situation')->nullable();
            $table->string('monthly_salary')->nullable();
            $table->string('currency_coin')->nullable();
            $table->longText('define_needs')->nullable();
            $table->longText('title_of_offer')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('child_baby')->nullable();
            $table->string('child_kid')->nullable();
            $table->string('child_boy')->nullable();
            $table->string('type_of_employment')->nullable();
            $table->string('living_arrangement')->nullable();
            $table->string('accommodation')->nullable();
            $table->string('day_off')->nullable();
            $table->string('expected_start_date')->nullable();
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('annonces');
    }
};
