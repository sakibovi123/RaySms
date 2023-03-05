<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\CompanyInterface;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CompanyController extends Controller
{
    private $company;

    public function __construct(CompanyInterface $company)
    {
        return $this->$company = $company;
    }

    public function index()
    {
        $comps = $this->repo->get_all_companies();
        return view("", []);
    }

    public function get_create_template()
    {
        return view("", []);
    }

    public function store(Request $request)
    {
        $data = [
            "user_id" => Auth::user(),
            "company_name" => $request->get("company_name"),
            "company_email" => $request->get("company_email"),
            "logo" => $request->file("logo"),
            "phone_number" => $request->get("phone_number"),
            "website" => $request->get("website")
        ];

        $this->company->store_company($data);
        return back();
    }


    public function show($company_name)
    {
        $comp = $this->company->get_company_details($company_name);
        return view("", $comp);
    }


    public function edit($company_name)
    {
        $comp = $this->company->get_company_details($company_name);
        return view("", [
            "comp" => $comp
        ]);
    }


    public function update(Request $request, $company_name)
    {
        $comp = $this->company->get_company_details($company_name);
        $data = [
            $comp->user_ud => $comp->user_id,
            $comp->company_name => $request->get("company_name"),
            $comp->company_email => $request->get("company_email"),
            $comp->logo => $request->file("logo"),
            $comp->phone_number => $request->get("phone_number"),
            $comp->website => $request->get("website")
        ];

        $this->company->update_company_details($company_name, $data);

        return back();
    }


    public function remove($company_id)
    {
//        $comp = Company::where("id", $company_id)->first();
        $this->company->delete_company($company_id);
        return back();
    }
}
