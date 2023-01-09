<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Campaign;


class CampaignController extends Controller
{

    // fecthing all the campaigns from Ringba
    public function fetch_all_campaigns()
    {
        $campaigns = Campaign::all()->sortBy("-created_at");

        return view("Dashboard.Campaigns.campaigns", [
            "campaigns" => $campaigns
        ]);
    }


    // create function
    public function create(){
        return view("Dashboard.Campaigns.create_campaign");
    }


    // storing campaigns into database
    public function store(Request $request){
        $campaign = new Campaign();
        $ringba_campaign_id = $request->get("ringba_campaign_id");

        if( !empty($ringba_campaign_id) ){
            $campaign->ringba_campaign_id = $ringba_campaign_id;
            $campaign->save();

            return back()->with("message", "campaigns added");
        }
        else{
            return back()->with("message", "Failed to create record");
        }
    }

    // stop campaign
    public function stop(Request $request, $id){
        $campaign = Campaign::find($id);
//        $status = $request->get("status");
        if( !empty($campaign) ) {
            $campaign->is_active = 1;
            $campaign->save();
            // pass a status message here------------------------------------
            return redirect("/campaigns")->with("message", "updated");
        }
    }
}
