<?php

namespace App\Http\Controllers;

use App\Imports\CustomerImport;
use App\Models\Customer;
use App\Models\DataList;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DataListController extends Controller
{
    /**
     * @return
     */

    public function index()
    {
        $lists = DataList::all()->sortBy("-created_at");
        return view("Dashboard.List.lists", [
            "lists" => $lists
        ]);
    }


    /**
     * create template view
     */
    public function create()
    {
        return view("Dashboard.List.create_list");
    }

    
    /**
     * saving Datalist into 
     */
    public function store(Request $request)
    {
        $list = new DataList();

        //$customer = new Customer();

        $list->list_id = $this->generate_random_string();
        $list->title = $request->get("title");

        // $list->save();
        // saving customers first
        // $customer_phones = Excel::import(new CustomerImport)->toCollection($request->file("excel_file"));

        $customer_phones = (new CustomerImport)->toCollection($request->file("excel_file"));
        // $customer_phones->toJson()
        foreach ($customer_phones as $value) {
            print_r($value);
            die();
            // foreach($value as $val){
            //     echo $val;
            //     die();
            // }
            
            
        }
        // $list->customers()->save($customer_phone);

        

        return back()->with("message", "Campaign Added");
    }

    
    // generating random string
    public function generate_random_string($length = 11)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


    // getting details and adding numbers
    public function show($list_id)
    {
        $customers_phone = Customer::where("id", $list_id)->get();

        echo $customers_phone;
    }

    
    // editing template view
    public function edit($list_id)
    {
        $list = DataList::where("list_id", "=", $list_id)->first();

        return view("Dashboard.List.edit");
    }


    // updating data
    public function update(Request $request, $list_id)
    {
        $list = DataList::where("list_id", "=", $list_id)->first();

        if( !empty($list) )
        {
            $list->title = $request->get("title");

            $list->save();
            return redirect()->with("message", "Data List Updated");
        } else {
            die();
        }
    }


    // removing list by id one by one
    public function remove($list_id)
    {
        $list = DataList::where("list_id", "=", $list_id)->first();
        $list->delete();
        return redirect()->with("message", "Data List Deleted");
    }


    // delete all function
    public function delete_all()
    {
        $list = DataList::all();
        $list->delete();
        return redirect()->with("message", "Data Lists Deleted"); 
    }
}
