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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('facebook_id')->nullable();
            $table->string('google_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
                  //////////////////
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('phone')->nullable();
            $table->string('religion')->nullable();
            $table->boolean('status')->default(0);
            $table->string('domain')->nullable();
            ///////famille////
         
            // $table->string('social_status')->nullable();
            ///////candidat////
            $table->string('years_experience')->nullable();
            /////////////////////////////////
            $table->string('gender')->nullable();
            $table->string('child_baby')->nullable();
            $table->string('child_kid')->nullable();
            $table->string('child_boy')->nullable();
            $table->string('type_of_employment')->nullable();
            $table->string('living_arrangement')->nullable();
            $table->string('accommodation')->nullable();
            $table->string('day_off')->nullable();
            $table->string('expected_start_date')->nullable();
            $table->longText('title_of_offer')->nullable();
            $table->longText('define_needs')->nullable();
            $table->string('helper_nationality')->nullable();
            $table->string('education_level')->nullable();
            $table->string('contract_situation')->nullable();
            $table->string('monthly_salary')->nullable();
            $table->string('currency_coin')->nullable();
            //////////////////////////////////
            $table->rememberToken();
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
        Schema::dropIfExists('users');
     
    }  
};
