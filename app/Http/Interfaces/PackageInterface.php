<?php

namespace App\Http\Interfaces;

Interface PackageInterface
{
    public function getAllPackage();
    public function addPackage($data);
    public function fetchPackage($package_id);
}
