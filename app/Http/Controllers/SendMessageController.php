<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\MessageContentModel;
use App\Models\SendMessage;
use App\Models\SendNumberModel;
use Exception;
use Illuminate\Http\Request;
use Twilio\Rest\Client;


class SendMessageController extends Controller
{
    public function template() {
        $sent = SendMessage::all();
        return view("Dashboard.SendMessage.messages", [
            "sent" => $sent
        ]);
    }


    public function create() {
        $templates = MessageContentModel::all();
        $numbers = SendNumberModel::all();
        $customers = Customer::all();
        return view("Dashboard.SendMessage.send_message", [
            "templates" => $templates,
            "numbers" => $numbers,
            "customers" => $customers
        ]);
    }

    public function send(Request $request) {
        $twilio_sid = getenv("TWILIO_SID");
        $twilio_token = getenv("TWILIO_TOKEN");

        $senderNumber = SendNumberModel::where("number", $request->get("sender_number"))->first();
        $sendmessage = new SendMessage();
        $sendmessage->template_id = $request->get("template_id");
        $sendmessage->sender_number_id = $senderNumber->id;
        $arr = [];
        $sendmessage->save();
        $customers = Customer::whereIn("id", $request->input("customer_id"))->get();

        foreach($customers as $customer){
            $sendmessage->customer()->attach($customer->id);
            try{
                $client = new Client($twilio_sid, $twilio_token);
                $client->messages->create(
                    $customer->customer_phone,
                    [
                        "from" => $senderNumber->number,
                        "body" => $sendmessage->messageContent->content,
                    ]
                );

                $arr[] = $customer->customer_phone;
            } catch(Exception $e){
                echo $e->getMessage();
                exit();
            }
        }
        return redirect("/messages")->with("numbers", implode(", ", $arr));
    }

    public function showDetails($id) {
        $sends = SendMessage::find($id)->customer;
        return $sends;
    }

}
