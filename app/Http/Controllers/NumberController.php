<?php

namespace App\Http\Controllers;

use App\Jobs\SendInstantSMS;
use App\Jobs\SendSMSAfter1Hour;
use App\Jobs\SendSMSAfter20Mins;
use App\Jobs\SendSMSAfter24Hours;
use App\Jobs\SendSMSAfter26Hours;
use App\Jobs\SendSMSAfter2Hours;
use App\Models\Number;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class NumberController extends Controller
{

    // getting all the numbers from fired pixel
    public function get_numbers_from_ringba()
    {
        $numbers = Number::all();
//        $contents = array(
//            "Still not Happy with our 20% discount? We have reserved a special enrollment opportunity just for you and your family (all-inclusive medical protection & 25% Discount)! Reduce your chances of becoming ill or injured with ACA, as 14.5 million US citizens have done. Call Now: +18883470772 before the offer expires Today!",
//            "We do not want to bother you, just following up about our ACA plan. We can help get your ACA health insurance fixed so your life is more manageable. If you apply today, you might be able to get free health insurance through the Marketplace. Call us +18883470772",
//            "Hey there! It’s our final follow-up from our end. Do you still wish to proceed? We are always here to assist you. Call us +18883470772 without any hesitation."
//            "We think you haven't noticed our previous offer yet. Don't worry, the offer is still available. There are more opportunities this time for you and your family to receive a 30% discount on ACA health insurance. Call Now: +18883470772 and secure your discounted ACA plan today! ",
//        );
//        $twilio_sid = getenv("TWILIO_SID");
//        $twilio_token = getenv("TWILIO_TOKEN");
//        $client = new Client($twilio_sid, $twilio_token);
//        foreach ($numbers as $number) {
//            if( $number->content1 == 0 && $number->content2 == 0 && $number->content3 == 0 && $number->content4 == 0 ){
//                $client->messages->create(
//                    $number->callerId,
//                    //"+14356277657",
//                    [
//                        "from" => "+13085299517",
//                        "body" => $contents[0]
//                    ]
//                );
//                $number->content1 = 1;
//                $number->save();
//            }
//            else if( $number->content1 == 1 && $number->content2 == 0 && $number->content3 == 0 && $number->content4 == 0 ) {
//                $client->messages->create(
//                    $number->callerId,
//                    //"+14356277657",
//                    [
//                        "from" => "+13085299517",
//                        "body" => $contents[1]
//                    ]
//                );
//                $number->content2 = 1;
//                $number->save();
//            }
//            else if( $number->content1 == 1 && $number->content2 == 1 && $number->content3 == 0 && $number->content4 == 0 ){
//                $client->messages->create(
//                    $number->callerId,
//                    //"+14356277657",
//                    [
//                        "from" => "+13085299517",
//                        "body" => $contents[2]
//                    ]
//                );
//                $number->content3 = 1;
//                $number->save();
//            }
//            else if(  $number->content1 == 1 && $number->content2 == 1 && $number->content3 == 1 && $number->content4 == 0 ){
//                $client->messages->create(
//                    $number->callerId,
//                    //"+14356277657",
//                    [
//                        "from" => "+13085299517",
//                        "body" => $contents[3]
//                    ]
//                );
//                $number->content4 = 1;
//                $number->save();
//            }
//
//        }


        return view("Dashboard.Numbers.numbers", [
            "numbers" => $numbers
        ]);
    }


    // post request url
    public function send_callerId_to_crm(Request $request)
    {
        $number = new Number();
        try{
            $number->callerId = $request->get("callerId");
            if( strlen( $number->callerId ) > 0 )
            {
                $number->save();

                // queues for automatic message
                SendInstantSMS::dispatch($number->callerId)
                    ->delay(now()->addMinutes(01));
                SendSMSAfter20Mins::dispatch($number->callerId)
                    ->delay(now()->addMinutes(20));
                SendSMSAfter1Hour::dispatch($number->callerId)
                    ->delay(now()->addMinutes(20)->addHours(1));
                SendSMSAfter2Hours::dispatch($number->callerId)
                    ->delay(now()->addHours(01));
                SendSMSAfter24Hours::dispatch($number->callerId)
                    ->delay((now()->addHours(23)));
                SendSMSAfter26Hours::dispatch($number->callerId)
                    ->delay(now()->addHours(2));

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
