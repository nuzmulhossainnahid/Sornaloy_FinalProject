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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('userId')->nullable();
            $table->string('name')->nullable();
            $table->string('fatherHusbandName')->nullable();
            $table->string('motherName')->nullable();
            $table->string('dateOfBirth')->nullable();
            $table->string('nidNo')->nullable();
            $table->string('occupation')->nullable();
            $table->string('phoneNo')->nullable();
            $table->string('email')->nullable();
            $table->string('permanentAddress')->nullable();
            $table->string('state')->nullable();
            $table->string('presentAddress')->nullable();
            $table->string('postCode')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();
            $table->string('goldAmount')->nullable();
            $table->string('goldType')->nullable();
            $table->string('loanAmount')->nullable();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('applications');
    }
};
