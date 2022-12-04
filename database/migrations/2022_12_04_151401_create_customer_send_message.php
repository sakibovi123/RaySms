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
        Schema::create('customer_send_message', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId("send_messages_id")->constrained("send_messages");
            $table->foreignId("customer_id")->constrained("customer");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_send_message');
    }
};
