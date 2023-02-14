<?php

namespace App\Http\Controllers;

use App\Models\SendNumberModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SenderNumberController extends Controller
{
    public function index() {
        $numbers = SendNumberModel::all()->sortBy("-id");
        return view("Dashboard.Sender.numbers", [
            "numbers" => $numbers
        ]);
    }

    public function create() {
        return view("Dashboard.Sender.create_number", []);
    }

    public function saveNumber(Request $request) {
        $number = new SendNumberModel();

        $number->number = $request->get("number");

        if( strlen($number->number) > 0 ) {
            $number->save();
            return redirect("/sender-numbers")->with("message", "Sender Number Added!");
        }
        else{
            return redirect("/sender-numbers")->with("message", "Failed To Create Data");
        }
    }

    public function edit($id) {
        $number = SendNumberModel::find($id);
        return view("Dashboard.Sender.edit_number", [
            "number" => $number
        ]);
    }

    public function update(Request $request, $id) {
        $number = SendNumberModel::find($id);
        $number->number = $request->get("number");
        $number->save();
        return redirect("/sender-numbers")->with("message", "Updated!");
    }

    public function destroy(Request $request, $id) {
        $number = SendNumberModel::find($id);
        $number->delete();
        return redirect("/sender-numbers")->with("message", "Deleted!");
    }


    public function remove_all()
    {
        DB::table("sendernumber")->delete();
        return back()
            ->with("message", "deleted successfully");
    }
}
