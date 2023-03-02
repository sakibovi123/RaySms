<?php

namespace App\Http\Controllers;

use App\Imports\CustomerImport;
use App\Models\Customer;
use App\Models\DataList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;


class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::paginate()->sortBy("id");
        return view("Dashboard.Customer.customers", [
            "customers" => $customers
        ]);
    }

    public function importCustomers() {
        // Excel::import(new UsersImport,request()->file('file'));

        Excel::import(new CustomerImport, request()->file('excel_file'));


        return back();
    }


    public function create(){
        $lists = DataList::all()->sortBy("-created_at");
        return view("Dashboard.Customer.create_customer", [
            "lists" => $lists
        ]);
    }

    public function create_customer_manually(Request $request)
    {
        $customer = new Customer();
        $customer_phone = $request->input("customer_phone");
        $data_list_id = $request->get("data_list_id");
        if( strlen($customer_phone) > 0 )
        {
            $customer->customer_phone = $customer_phone;
            $customer->data_list_id = $data_list_id;
            $customer->is_active = 0;
            $customer->save();

            return back()->with("message", "Number added");
        }
        else
        {
            return back()->with("message", "Failed!");
        }
    }

    public function destroy($id){
        $customer = Customer::find($id);
        $customer->delete();
        return redirect("/customers")->with("message", "Data deleted!");
    }


    // deleting all customers
    public function destroy_all()
    {
        DB::table("customer")->delete();
        return back()->with("message", "All Customers Deleted");
    }
}
