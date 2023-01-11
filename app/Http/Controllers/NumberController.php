<?php

namespace App\Http\Controllers;

use App\Jobs\SendInstantSMS;
use App\Jobs\SendSMSAfter1Hour;
use App\Jobs\SendSMSAfter20Mins;
use App\Jobs\SendSMSAfter24Hours;
use App\Jobs\SendSMSAfter26Hours;
use App\Jobs\SendSMSAfter2Hours;
use App\Models\Campaign;
use App\Models\Content;
use App\Models\Number;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class NumberController extends Controller
{

    // getting all the numbers from fired pixel
    public function get_numbers_from_ringba()
    {
        $numbers = Number::all();
        return view("Dashboard.Numbers.numbers", [
            "numbers" => $numbers
        ]);
    }


    // post request url
    public function send_callerId_to_crm(Request $request)
    {
        $number = new Number();
        $campaign = new Campaign();
        try{
            $number->callerId = $request->get("callerId");
            $campaignId = $request->get("ringba_campaign_id");
            if( strlen( $number->callerId ) > 0 )
            {
                if( Campaign::where("ringba_campaign_id", "=", $campaignId)->count() > 0 ){
                    $camp_id = Campaign::where("ringba_campaign_id", $campaignId)->first();
                    $number->campaign_id = $camp_id->id;
                    $number->save();
                }
                else{
                    $campaign->ringba_campaign_id = $campaignId;
                    $campaign->save();
                    $number->campaign_id = $campaign->id;
                    $number->save();
                }

                $contents = Content::where("campaign_id", $camp_id->id)->get();


                // queues for automatic message
                if( $camp_id->is_active == 1 ) {
                    SendInstantSMS::dispatch($number->callerId, $contents[0]->body);

                    SendSMSAfter20Mins::dispatch($number->callerId, $contents[1]->body)
                        ->delay(now()->addMinutes(20));

                    SendSMSAfter1Hour::dispatch($number->callerId, $contents[2]->body)
                        ->delay(now()->addMinutes(20)->addHours(1));

                    SendSMSAfter2Hours::dispatch($number->callerId, $contents[3]->body)
                        ->delay(now()->addHours(01));

                    SendSMSAfter24Hours::dispatch($number->callerId, $contents[4]->body)
                        ->delay((now()->addHours(23)));

                    // SendSMSAfter26Hours::dispatch($number->callerId, $contents[5]->body)
                    //     ->delay(now()->addHours(2));

                }

                return response()->json([
                    "status" => "success",
                    "number" => $number,
                ]);
            }
            else{
                return response()->json([
                    "status" => "failed"
                ]);
            }
        }
        catch(\Exception $e){
            return $e;
        }
    }


    // sending message to callers
//    public function send_mesasge ($numbers, $contents)
//    {
//        $twilio_sid = getenv("TWILIO_SID");
//        $twilio_token = getenv("TWILIO_TOKEN");
//
//        if( strlen($numbers) > 0 )
//        {
//            foreach($numbers as $number)
//            {
//                foreach ($contents as $content)
//                {
//                    try
//                    {
//                        $client = new Client($twilio_sid, $twilio_token);
//                        $number = $number->toArray();
//                        $client->messages->create(
//                        $number,
//                            //"+14356277657",
//                            [
//                                "from" => "+18882998227",
//                                "body" => $content++
//                            ]
//                        );
//
//                        return response("Success");
//                    }
//                    catch( Exception $e )
//                    {
//                        echo $e;
//                    }
//                }
//
//            }
//        }
//    }
}
