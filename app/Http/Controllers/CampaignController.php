<?php

namespace App\Http\Controllers;
// use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use \GuzzleHttp\Psr7\Request;
use Twilio\Rest\Client as Cli;



class CampaignController extends Controller
{

    // fecthing all the campaigns from Ringba
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

    // filtering numbers capaign wise
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
//        foreach($campaigns["campaign"]["affiliateNumbers"] as $numb){
//            $this->send_message($numb);
//        }


        // echo $campaigns;
        return view("Dashboard.Campaigns.single_campaign", [
            "campaigns" => json_decode($campaigns, true)
        ]);
    }

    // sending message to numbers
    public function send_message($numbers)
    {
        $twilio_sid = getenv("AC2b0cc7c783ccc1e82f3771636dda5e73");
        $twilio_token = getenv("e224561207d5ebf64cfe5411da16fccb");


        $message_content = array(
            "We apologize that your call was dropped. We have qualified you for a simple, low-cost health insurance plan. Contact us at +18883470772 again within 1 minute to find out more about your free, no-risk health insurance plan!",
            "Hi, Congratulations! As an apology for the dropped call, We are currently offering you a limited time 20% discount on the ACA Insurance Plan, just for you! Please reach us again at +18883470772. Grab the Lifetime HealthCare Opportunity within a Minute!",
            "Still not Happy with our 20% discount? We have reserved a special enrollment opportunity just for you and your family (all-inclusive medical protection & 25% Discount)! Reduce your chances of becoming ill or injured with ACA, as 14.5 million US citizens have done. Call Now: +18883470772 before the offer expires Today!",
            "We think you haven't noticed our previous offer yet. Don't worry, the offer is still available. There are more opportunities this time for you and your family to receive a 30% discount on ACA health insurance. Call Now: +18883470772 and secure your discounted ACA plan today!",
            "We do not want to bother you, just following up about our ACA plan. We can help get your ACA health insurance fixed so your life is more manageable. If you apply today, you might be able to get free health insurance through the Marketplace. Call us +18883470772",
            "Hey there! It’s our final follow-up from our end. Do you still wish to proceed? We are always here to assist you. Call us +18883470772 without any hesitation."
        );
        if( count($numbers) > 0 )
        {
            foreach($numbers as $number)
            {
                try
                {
                    $client = new Cli($twilio_sid, $twilio_token);
                    $client->messages->create(
                        $number,
                        [
                            "from" => "+18882998227",
                            "body" => $message_content++
                        ]
                    );

                    return response("Success");
                }
                catch( Exception $e )
                {
                    echo $e;
                }
            }
        }

    }
}
