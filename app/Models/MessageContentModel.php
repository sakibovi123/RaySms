<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageContentModel extends Model
{
    use HasFactory;

    protected  $table = "messagecontent";

    protected $fillable = [
        "title",
        "content"
    ];

    public function sendmessage() {
        return $this->hasMany(SendMessage::class);
    }

}
