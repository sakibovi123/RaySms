<?php

namespace App\Http\Repositories;

use App\Http\Interfaces\PackageInterface;
use App\Models\Package;


class PackageRepository implements PackageInterface
{
    public function getAllPackage()
    {
        // TODO: Implement getAllPackage() method.
        return Package::all();
    }

    public function addPackage($data)
    {
        // TODO: Implement addPackage() method.
        return Package::create($data);
    }

    public function fetchPackage($package_id)
    {
        // TODO: Implement fetchPackage() method.
        return Package::where("id", $package_id)->first();
    }
}
