<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerSendMessage extends Model
{
    use HasFactory;

    protected $table = "customer_send_message";

    protected $fillable = [
        "customers_id",
        "send_messages_id",
    ];


}
