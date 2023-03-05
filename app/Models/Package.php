<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $table = "packages";

    protected $fillable = [
        "package_name", "package_desc", "duration", "price", "is_active", "has_expired"
    ];

    public function packagecheckout()
    {
        return $this->belongsTo(PackageCheckout::class);
    }

}
