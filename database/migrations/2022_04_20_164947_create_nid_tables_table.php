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
        Schema::create('nid_tables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Name')->nullable();
            $table->string('Fathers/HusbandName')->nullable();
            $table->string('MothersName')->nullable();
            $table->string('PresentAddress')->nullable();
            $table->string('PermanentAddress')->nullable();
            $table->string('MobileNo')->nullable();
            $table->string('emailAddress')->nullable();
            $table->string('DateofBirth')->nullable();
            $table->string('Occupation')->nullable();
            $table->string('NIDNo')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nid_tables');
    }
};
