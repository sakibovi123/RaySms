<?php

namespace App\Http\Controllers;

use App\Models\FailedJobs;
use App\Models\Jobs;
use Illuminate\Http\Request;

class JobController extends Controller
{
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


}
