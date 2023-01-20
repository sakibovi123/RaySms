<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\DataList;
use App\Models\MessageContentModel;
use App\Models\SendMessage;
use App\Models\SendNumberModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Twilio\Rest\Client;


class SendMessageController extends Controller
{
    public function template() {
        $sent = SendMessage::paginate(15);
        return view("Dashboard.SendMessage.messages", [
            "sent" => $sent
        ]);
    }


    public function create() {
        $templates = MessageContentModel::all();
        $numbers = SendNumberModel::all();
        $customers = Customer::all();
        $lists = DataList::all()->sortByDesc("created_at");
        return view("Dashboard.SendMessage.send_message", [
            "templates" => $templates,
            "numbers" => $numbers,
            "customers" => $customers,
            "lists" => $lists
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
        $list = $request->get("list");

        $customers = Customer::where("data_list_id", "=", $list)->get();
        foreach($customers as $customer){
            $sendmessage->customer()->attach($customer->id);
            if( $customer->is_active == 0 )
            {
                try{
                    $client = new Client($twilio_sid, $twilio_token);
                    $client->messages->create(
                        $customer->customer_phone,
                        [
                            "from" => $senderNumber->number,
                            "body" => $sendmessage->messageContent->content,
                        ]
                    );
                    $customer->is_active = 1;
                    $customer->save();
                    $arr[] = $customer->customer_phone;
                } catch(Exception $e){
                    echo $e->getMessage();
                    exit();
                }
            }
            else
            {
                return redirect("/messages");
            }

        }
        return redirect("/messages")->with("numbers", implode(", ", $arr));
    }

    public function showDetails($id) {
        $sends = SendMessage::find($id)->customer;
        return view("Dashboard.SendMessage.details", [
            "sends" => $sends
        ]);
    }


    /**
     * Summary of send_sms_automatically
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function remove($id)
    {
        $bulk_id = SendMessage::find($id);
        $bulk_id->delete();
        return back();
    }


    /**
     * removing all of the data from send_messages db.
     */
    public function remove_all()
    {
        DB::table("send_messages")->delete();
        return back()->with("message", "Deleted Susccessfully!");
    }

}
