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
        Schema::create('loan_appliers', function (Blueprint $table) {
            $table->id();
            $table->string('nidNo')->nullable();
            $table->string('dateofBirth')->nullable();
            $table->string('goldMeasure')->nullable();
            $table->string('goldType')->nullable();
            $table->string('loanAmount')->nullable();
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
        Schema::dropIfExists('loan_appliers');
    }
};
