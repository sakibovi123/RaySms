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
        Schema::create('send_messages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("template_id");
            $table->unsignedBigInteger("sender_number_id");
            // $table->unsignedBigInteger("cutomer_id");
            $table->foreign("template_id")->references("id")->on("messagecontent")->onDelete("cascade");
            $table->foreign("sender_number_id")->references("id")->on("sendernumber")->onDelete("cascade");
           // $table->foreign("customer_id")->references("id")->on("customer")->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('send_messages');
    }
};
