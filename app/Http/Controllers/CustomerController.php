<?php

namespace App\Http\Controllers;

use App\Imports\CustomerImport;
use App\Models\Customer;
use Illuminate\Http\Request;
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
        return view("Dashboard.Customer.create_customer");
    }

    public function create_customer_manually(Request $request){
        $customer_phone = $request->input("customer_phone");

        if( strlen($customer_phone) > 0 ){
            Customer::create([
                "customer_phone" => $customer_phone
            ]);

            return back();
        }
    }

    public function destroy($id){
        $customer = Customer::find($id);
        $customer->delete();
        return redirect("/customers")->with("message", "Data deleted!");
    }
}
