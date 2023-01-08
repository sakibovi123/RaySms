<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    // index
    public function index(){
        $contents = Content::all()->sortBy("created_at");
        return view(
            "Dashboard.Contents.contents", [
                "contents" => $contents
            ]
        );
    }

    // create template
    public function create(){
        return view("Dashboard.Contents.create_content");
    }

    // storing
    public function store(Request $request){

    }


    // edit
    public function update(Request $request){}


    // delete
    public function delete(Request $request){

    }
}
