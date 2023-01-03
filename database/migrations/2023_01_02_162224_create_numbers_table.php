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
        Schema::create('numbers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("callerId", 255);
            $table->boolean("content1")->default(false)->nullable();
            $table->boolean("content2")->default(false)->nullable();
            $table->boolean("content3")->default(false)->nullable();
            $table->boolean("content4")->default(false)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('numbers');
    }
};
