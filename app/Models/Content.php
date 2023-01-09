<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $table = "contents";

    protected $fillable = [ "body", "camapaign_id" ];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
