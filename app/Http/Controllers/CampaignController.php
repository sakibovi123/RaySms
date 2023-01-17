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

    public function index()
    {
        //Query builder
        //$campaigns = DB::table('campaigns')->paginate(4);
        $campaigns = Campaigns::paginate(3);
        return view('Dashboard.Campaigns.index', [
            'campaigns' => $campaigns
        ]);
    }


    // create function
    public function create(){
        return view("Dashboard.Campaigns.create_campaign");
    }


    // storing campaigns into database
    public function store(Request $request){
        $campaign = new Campaign();
        $campaign_title = $request->get("campaign_title");
        $ringba_campaign_id = $request->get("ringba_campaign_id");

        if( !empty($ringba_campaign_id) && !empty($campaign_title) ){
            $campaign->ringba_campaign_id = $ringba_campaign_id;
            $campaign->campaign_title = $campaign_title;
            $campaign->save();

            return back()->with("message", "campaigns added");
        }
        else{
            return back()->with("message", "Failed to create record");
        }
    }

    // stop campaign
    public function start_or_stop(Request $request, $id){
        $campaign = Campaign::find($id);

        // checking status from the input
        // if the status is start then is_active = 1
        if( !empty($campaign) ) {
            if( $request->get("start") ){
                $campaign->is_active = 1;
                $campaign->save();
            }
            // else if the is_active = 0
            else if( $request->get("stop") ) {
                $campaign->is_active = 0;
                $campaign->save();
            }

            // pass a status message here------------------------------------
            return redirect("/campaigns")->with("message", "status updated");
        }
    }
}
