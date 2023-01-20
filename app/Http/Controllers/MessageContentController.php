<?php

namespace App\Http\Controllers;

use App\Models\MessageContentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $templates = MessageContentModel::all()->sortBy("created_at");
        // $templates = DB::table('messagecontent')->orderBy("created_at");
        return view(
            "Dashboard.Message.templates", [
                "templates" => $templates
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view("Dashboard.Message.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $template = new MessageContentModel();
        $template->title = $request->get("title");
        $template->content = $request->get("content");

        if( strlen($template->title) > 0 && strlen($template->content) > 0 ){
            $template->save();
            return redirect("/templates")->with("message", "Template Generated!");
        }
        else{
            return redirect()->back()->with("message", "Template Generation Failed!!");

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MessageContentModel  $messageContentModel
     * @return \Illuminate\Http\Response
     */
    public function show(MessageContentModel $messageContentModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MessageContentModel  $messageContentModel
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function editTemplate($id)
    {
        $template = MessageContentModel::find($id);

        return view("Dashboard.Message.edit", [
            "template" => $template
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MessageContentModel  $messageContentModel
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $template = MessageContentModel::find($id);
        $template->title = $request->get("title");
        $template->content = $request->get("content");

        $template->save();
        return redirect("/templates")->with("message", "Template Updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MessageContentModel  $messageContentModel
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $template = MessageContentModel::find($id);
        $template->delete();

        return redirect("/templates")->with("message", "Template Deleted!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MessageContentModel  $messageContentModel
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function remove_all()
    {
        DB::table("messagecontent")->delete();
        return back()
            ->with("message", "deleted successfully");
    }
}
