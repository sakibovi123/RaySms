<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use \GuzzleHttp\Psr7\Request;


class CampaignController extends Controller
{

    public function fetch_all_campaigns()
    {
        $client = new Client();
        $headers = [
            "Content-Type" => "application/json",
            "Authorization" => "Token 09f0c9f0935283360f607645be5cf09d69c6980b5f800c30d130e074db665a5eff8ddfe8ab25207d0e33ec8a55051e683bcd24dc1ad059ddf578d3866d3c8332dd86a3763bb5abbf6a30ced11aa66eb12f307556c3f7b3970dcd19e10b6ac3b746d048d4f73836244d7cddca8c4befb5415f63bd"
        ];

        $request = new Request(
            "GET", "https://api.ringba.com/v2/RA11a74d12f3d84ee6991853ff57608715/campaigns", $headers
        );

        $campaigns = $client->sendAsync($request)->wait()->getBody();

        return view("Dashboard.Campaigns.campaigns", [
            "campaigns" => json_decode($campaigns, true)
        ]);
    }

    public function fetch_campaign_wise_customers($camp_id)
    {
        $client = new Client();

        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Token 09f0c9f0935283360f607645be5cf09d69c6980b5f800c30d130e074db665a5eff8ddfe8ab25207d0e33ec8a55051e683bcd24dc1ad059ddf578d3866d3c8332dd86a3763bb5abbf6a30ced11aa66eb12f307556c3f7b3970dcd19e10b6ac3b746d048d4f73836244d7cddca8c4befb5415f63bd'
        ];

        $request = new Request(
            "GET", "https://api.ringba.com/v2/RA11a74d12f3d84ee6991853ff57608715/campaigns/$camp_id", $headers
        );

        $campaigns = $client->sendAsync($request)->wait()->getBody();

        // echo $campaigns;
        return view("Dashboard.Campaigns.single_campaign", [
            "campaigns" => json_decode($campaigns, true)
        ]);
    }
}
