<?php

namespace App\Http\Repositories;


use App\Http\Interfaces\CompanyInterface;
use App\Models\Company;

class CompanyRepositories implements CompanyInterface
{
    public function get_all_companies()
    {
        // TODO: Implement get_all_companies() method.
        return Company::all()->sortBy("asc");
    }

    public function store_company($data)
    {
        // TODO: Implement store_company() method.
        return Company::create($data);
    }

    public function get_company_details($company_name)
    {
        // TODO: Implement get_company_details() method.
        return Company::where("company_name", $company_name)->first();
    }

    public function update_company_details($company_name, $data)
    {
        // TODO: Implement update_company_details() method.
    }

    public function delete_company($company_id)
    {
        // TODO: Implement delete_company() method.
        $company = Company::where("id", $company_id)->first();
        return $company->delete();
    }
}
