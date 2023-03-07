<?php

namespace App\Http\Controllers\Package;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function place_order(Request $request, $package_id)
    {
        $package = Package::where("id", $package_id)->first();

    }
}
