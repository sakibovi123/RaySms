<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendMessage extends Model
{
    use HasFactory;

    protected $table = "send_messages";

    protected $fillable = [
        "customer_id",
        "template_id",
        "sender_number_id"
    ];

    public function messageContent() {
        return $this->belongsTo(MessageContentModel::class);
    }

    public function senderNumber() {
        return $this->belongsTo(SendNumberModel::class);
    }

    public function customer() {
        return $this->belongsToMany(Customer::class, "customer_send_message", "send_messages_id");
    }

}
