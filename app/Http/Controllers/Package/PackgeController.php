<?php

namespace App\Http\Controllers\Package;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\PackageInterface;
use Illuminate\Http\Request;

class PackgeController extends Controller
{
    private $packageInterface;


    public function __construct(PackageInterface $packageInterface)
    {
        $this->packageInterface = $packageInterface;
    }


    public function index()
    {
        $packages = $this->packageInterface->getAllPackage();
        return view("Admin.Packages.index", [
            "packages" => $packages
        ]);
    }


    public function create()
    {
        return view("", []);
    }


    public function store(Request $request)
    {

    }

}
