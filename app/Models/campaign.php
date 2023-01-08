<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class campaign extends Model
{
    use HasFactory;

    protected $table = "campaigns";

    protected $fillable = [ "campaign_id" ];

    public function numbers(){
        return $this->hasMany(Number::class);
    }

    public function contents(){
        return $this->hasMany(Content::class);
    }
}
