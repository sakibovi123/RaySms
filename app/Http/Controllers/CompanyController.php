<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\CompanyInterface;
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
}
