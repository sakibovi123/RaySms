<?php

namespace App\Http\Controllers\Package;

use App\Http\Controllers\Controller;
use App\Http\Interfaces\PackageInterface;
use App\Models\Package;
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
        $data = [
            "package_name" => $request->get("package_name"),
            "package_desc" => $request->get("package_desc"),
            "duration" => $request->get("duration"),
            "price" => $request->get("price"),

        ];

        $this->packageInterface->addPackage($data);
        return back();
    }


    public function fetch_single_package($package_id)
    {
        $package = Package::find($package_id);
        return view("", [
            "package" => $package
        ]);
    }

    public function update(Request $request, $package_id)
    {
        $package = Package::where("id", $package_id)->first();
        $package->package_name = $request->get("package_name");
        $package->package_desc = $request->get("package_desc");
        $package->duration = $request->get("duration");
        $package->price = $request->get("price");
        $package->save();

        return back();
    }

    public function remove($package_id)
    {
        $package = Package::where("id", $package_id)->first();
        $package->delete();
        return back();
    }
}
