<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataList extends Model
{
    use HasFactory;

    protected $table = "data_lists";

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}
