<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = "companies";

    protected $fillable = [
        "user_id", "company_name", "company_email", "logo", "phone_number", "website"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
