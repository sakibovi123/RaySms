<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\MessageContentModel;
use App\Models\SendMessage;
use App\Models\SendNumberModel;
use Illuminate\Http\Request;


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
        $sendmessage = new SendMessage();


        $sendmessage->template_id = $request->get("template_id");
        $sendmessage->sender_number_id = $request->get("sender_number_id");

        $sendmessage->save();
         $customers = [Customer::all()];
//        $customers = [$request->get("customer_id[]")];
        // $sendmessage->customer()->attach([$customers]);
        foreach($customers as $customer){
            $sendmessage->customer()->attach($customer);
        }



        return redirect("")->with("message", "Sms sent!");
    }

    public function showDetails($id) {
        $sends = SendMessage::find($id)->customer;

        return $sends;
    }

}
