<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendNumberModel extends Model
{
    use HasFactory;

    protected $table = "sendernumber";

    protected $fillable = [ "number" ];

    public function sendmessage () {
        return $this->belongsToMany(SendMessage::class);
    }
}
