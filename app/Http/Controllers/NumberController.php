<?php

namespace App\Http\Controllers;

use App\Models\Number;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class NumberController extends Controller
{

    // getting all the numbers from fired pixel
    public function get_numbers_from_ringba()
    {
        $numbers = Number::all();
        $contents = array(
            "We apologize that your call was dropped. We have qualified you for a simple, low-cost health insurance plan. Contact us at +18883470772 again within 1 minute to find out more about your free, no-risk health insurance plan!",
            "Hi, Congratulations! As an apology for the dropped call, We are currently offering you a limited time 20% discount on the ACA Insurance Plan, just for you! Please reach us again at +18883470772. Grab the Lifetime HealthCare Opportunity within a Minute!",
            "Still not Happy with our 20% discount? We have reserved a special enrollment opportunity just for you and your family (all-inclusive medical protection & 25% Discount)! Reduce your chances of becoming ill or injured with ACA, as 14.5 million US citizens have done. Call Now: +18883470772 before the offer expires Today!",
            "We do not want to bother you, just following up about our ACA plan. We can help get your ACA health insurance fixed so your life is more manageable. If you apply today, you might be able to get free health insurance through the Marketplace. Call us +18883470772",
            "Hey there! It’s our final follow-up from our end. Do you still wish to proceed? We are always here to assist you. Call us +18883470772 without any hesitation."
        );
        $twilio_sid = getenv("TWILIO_SID");
        $twilio_token = getenv("TWILIO_TOKEN");
        $client = new Client($twilio_sid, $twilio_token);
        foreach ($numbers as $number) {
            $client->messages->create(
                $number->callerId,
                //"+14356277657",
                [
                    "from" => "+18882998227",
                    "body" => $contents[1]
                ]
            );
        }


        return view("Dashboard.Numbers.numbers", [
            "numbers" => $numbers
        ]);
    }


    // post request url
    public function send_callerId_to_crm(Request $request)
    {
        $numbers = Number::all();
        $number = new Number();

        try{
            $number->callerId = $request->get("callerId");

            if( strlen( $number->callerId ) > 0 )
            {
                $number->save();
                return response()->json([
                    "status" => "success"
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
    public function send_mesasge ($numbers, $contents)
    {
        $twilio_sid = getenv("TWILIO_SID");
        $twilio_token = getenv("TWILIO_TOKEN");

        if( strlen($numbers) > 0 )
        {
            foreach($numbers as $number)
            {
                foreach ($contents as $content)
                {
                    try
                    {
                        $client = new Client($twilio_sid, $twilio_token);
                        $number = $number->toArray();
                        $client->messages->create(
                        $number,
                            //"+14356277657",
                            [
                                "from" => "+18882998227",
                                "body" => $content++
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
}
