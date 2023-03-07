<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function landing()
    {
        $packages = Package::all();
        return view("Customer.landing", [
            "packages" => $packages
        ]);
    }
}
