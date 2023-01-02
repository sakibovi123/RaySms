<?php

namespace App\Http\Controllers;

use App\Models\Number;
use Illuminate\Http\Request;

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

        try{
            $number->callerId = $request->get("callerId");

            if( strlen( $number->callerId ) > 0 )
            {
                $number->save();
                return response()->json([
                    "status" => "success"
                ]);
            }
        }

        catch(\Exception $e){
            return $e;
        }
    }
}
