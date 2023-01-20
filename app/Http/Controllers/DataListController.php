<?php

namespace App\Http\Controllers;

use App\Imports\CustomerImport;
use App\Models\Customer;
use App\Models\DataList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class DataListController extends Controller
{
    /**
     * @return
     */

    public function index()
    {
        $lists = DataList::all()->sortByDesc("created_at");
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

        $list->save();
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
        $list = DataList::where("list_id", $list_id)->first();
        $customer = Customer::whereIn("data_list_id", $list)->get();

        return view("Dashboard.List.list_wise", [
            "list" => $list,
            "customer" => $customer
        ]);
    }


    // importing customers

    // editing template view
    public function edit($list_id)
    {
        $list = DataList::find($list_id);

        return view("Dashboard.List.edit", [
            "list" => $list
        ]);
    }


    // updating data
    public function update(Request $request, $list_id)
    {
        $list = DataList::find($list_id);

        if( !empty($list) )
        {
            $list->title = $request->get("title");

            $list->save();
            return redirect("/lists")->with("message", "Data List Updated");
        } else {
            die();
        }
    }


    // removing list by id one by one
    public function remove($list_id)
    {
        $list = DataList::find($list_id);
        $list->delete();
        return back()->with("message", "Data List Deleted");
    }


    // delete all function
    public function delete_all()
    {
        DB::table("data_lists")->delete();
        return back()->with("message", "Data Lists Deleted");
    }
}
