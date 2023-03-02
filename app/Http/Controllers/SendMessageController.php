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
use SignalWire\Rest\Client;


class SendMessageController extends Controller
{
    public function template ()
    {
        $sent = SendMessage::paginate(15);
        return view("Dashboard.SendMessage.messages", [
            "sent" => $sent
        ]);
    }


    public function create ()
    {
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

    // getting all numbers by datalist
    public function get_numbers($list_id): \Illuminate\Http\JsonResponse
    {
        $customers = Customer::where("data_list_id", $list_id)
            ->where("is_active", "=", 0)
            ->get();
        return response()
            ->json($customers);
    }

    // sending messages to multiples users

    public function send (Request $request)
    {
        $twilio_sid = getenv("TWILIO_SID");
        $twilio_token = getenv("TWILIO_TOKEN");

        $signal_pid = "2fffaf01-354f-4579-b62e-60e8afab322c";
        $signal_api = "PT92bd1e3454e65dba01cb8490faff3f8018b99125577a1994";
        $SPACE_URL = "riponkumarakash.signalwire.com";


        $senderNumber = SendNumberModel::where("number", $request->get("sender_number"))->first();
        $sendmessage = new SendMessage();
        $sendmessage->template_id = $request->get("template_id");
        $sendmessage->sender_number_id = $senderNumber->id;
        $arr = [];
        $sendmessage->save();
        $list = $request->get("list");

        // $customers = Customer::where("data_list_id", "=", $list)->get();
        $customers = Customer::whereIn("id", $request->input("customer_id"))->get();
        foreach ($customers as $customer) {
            $sendmessage->customer()->attach($customer->id);
            if ($customer->is_active == 0) {
                try {
                    $client = new Client($signal_pid, $signal_api, array("signalwireSpaceUrl" => $SPACE_URL));
                    $client->messages->create(
                        $customer->customer_phone,
                        array(
                            "from" => "+13853604801",
                            "body" => $sendmessage->messageContent->content,
                        )
                    );
                    $customer->is_active = 1;
                    $customer->save();
                    $arr[] = $customer->customer_phone;
                } catch (Exception $e) {
                    echo $e->getMessage() . "remove this number and continue again!";
                    exit();
                }
            } else {
                return redirect("/messages");
            }

        }
        return redirect("/messages")->with("numbers", implode(", ", $arr));
    }

    public function showDetails ($id)
    {
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
    public function remove ($id)
    {
        $bulk_id = SendMessage::find($id);
        $bulk_id->delete();
        return back();
    }


    /**
     * removing all of the data from send_messages db.
     */
    public function remove_all ()
    {
        DB::table("send_messages")->delete();
        return back()->with("message", "Deleted Susccessfully!");
    }

}
