<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\FailedJobs;
use App\Models\Jobs;
=======
>>>>>>> 0a1c9a81639901eae4658b4a4506aa20e141c906
use Illuminate\Http\Request;

class JobController extends Controller
{
<<<<<<< HEAD
    // viewing all the jobs failed or success
    public function fetching_all_jobs()
    {
        $jobs = Jobs::all();
        $failed_jobs = FailedJobs::all();
        return view("Dashboard.Jobs.jobs", [
            "jobs" => $jobs,
            "failed_jobs" => $failed_jobs
        ]);
    }


=======
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("Dashboard.Logs.logs", [

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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
>>>>>>> 0a1c9a81639901eae4658b4a4506aa20e141c906
}
