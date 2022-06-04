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
        Schema::create('customer_requests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('userId')->nullable();
            $table->string('Name')->nullable();
            $table->string('nid')->nullable();
            $table->string('address')->nullable();
            $table->string('presentAddress')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('goldAmount')->nullable();
            $table->string('LoanAmount')->nullable();
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_requests');
    }
};
