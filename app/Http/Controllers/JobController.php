<?php

namespace App\Http\Controllers;

use App\Models\FailedJobs;
use App\Models\Jobs;
use Illuminate\Http\Request;

class JobController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Jobs::all();
        $failed_jobs= FailedJobs::all();
        return view("Dashboard.Logs.logs", [
            "jobs" => $jobs,
            "failed_jobs" => $failed_jobs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $job = Jobs::find($id);
        $job->delete();

        $failed = FailedJobs::find($id);
        $failed->delete();

        return back()
            ->with("message", "Deleted!");
    }
}
