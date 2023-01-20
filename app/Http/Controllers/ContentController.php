<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
    // index
    public function index(){
        $contents = Content::all()->sortBy("created_at");
        return view("Dashboard.Contents.contents", [
            "contents" => $contents
        ]);
    }

    // create function
    public function create(){
        $campaigns = Campaign::all()->sortBy("created_at");
        return view("Dashboard.Contents.create_content", [
            "campaigns" => $campaigns
        ]);
    }

    // storing contents into database
    public function store(Request $request){
        $content = new Content();

        $body = $content->body = $request->get("body");
        $campaign_id = $content->campaign_id = $request->get("campaign_id");

        if( !empty($body) && !empty($campaign_id) )
        {
            $content->save();

            return back();
        }
        else
        {
            return back()->with("message", "Fields are empty please fill up");
        }
    }


    // edit function
    public function edit($id){
        $content = Content::find($id);
        $campaigns = Campaign::all();
        return view("Dashboard.Contents.edit_content", [
            "content" => $content,
            "campaigns" => $campaigns
        ]);
    }


    // updating contents function
    public function update(Request $request, $id){
        $content = Content::find($id);

        $content->body = $request->get("body");
        $content->campaign_id = $request->get("campaign_id");

        $content->save();
        return back()->with("message", "updated successfully");
    }


    // deleting content
    public function remove($id){
        $content = Content::find($id);
        $content->delete();
        return redirect("")
            ->with("message", "deleted successfully");
    }


    // deleting all contents
    


}
