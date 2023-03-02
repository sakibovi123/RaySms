<?php

namespace App\Http\Interfaces;

Interface CompanyInterface
{
    public function get_all_companies();
    // public function get_create_template($template_name);
    public function store_company($data);
    public function get_company_details($company_name);
    public function update_company_details($company_name, $data);
    public function delete_company($company_id);
}
