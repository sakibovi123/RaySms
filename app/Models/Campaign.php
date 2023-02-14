<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $table = "campaigns";

    protected $fillable = [ "ringba_campaign_id", "is_active" ];

    public function contents(){
        return $this->hasMany(Content::class);
    }

    public function numbers(){
        return $this->hasMany(Number::class);
    }
}
