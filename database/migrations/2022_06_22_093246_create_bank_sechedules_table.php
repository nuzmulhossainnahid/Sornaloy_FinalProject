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
        Schema::create('bank_sechedules', function (Blueprint $table) {
            $table->id();
            $table->string('bankName')->nullable();
            $table->string('branch')->nullable();
            $table->string('address')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('condition')->default(0);
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
        Schema::dropIfExists('bank_sechedules');
    }
};
