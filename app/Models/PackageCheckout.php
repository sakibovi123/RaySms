<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageCheckout extends Model
{
    use HasFactory;
    protected $table = "package_checkouts";

    protected $fillable = [
        "user_id", "package_id", "trx_id", "total"
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function package()
    {
        return $this->hasMany(Package::class);
    }
}
