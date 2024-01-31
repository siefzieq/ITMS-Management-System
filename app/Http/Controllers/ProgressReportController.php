<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\ProgressReport;
use App\Models\Project;
use Illuminate\Http\Request;

class ProgressReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $progress = ProgressReport::all(); // Fetch all requests from the database

        return view('leadDeveloper.index', compact('progress'));
    }

    public function list()
    {
        $progress = ProgressReport::all(); // Fetch all requests from the database

        return view('LeadDeveloper.list', compact('progress'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects=Project::all();
        return view('LeadDeveloper.create',compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([

            'project_id' => 'required|int',
            'progress_date' => 'required|date',
            'progress_status' => 'required|string|in:ahead-of-schedule,on-schedule,delayed,completed',
            'description' =>'required|min:4|string|max:255'
        ]);

        $progress = new ProgressReport();
        $progress->project_id = $request->project_id;
        $progress->progress_date = $request->progress_date;
        $progress->progress_status = $request->progress_status;
        $progress->description = $request->description;
        $progress->save();

        return redirect()->route('progress.index')
            ->withSuccess('New student added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProgressReport $progress)
    {
        $project= Project::all();
        return view('LeadDeveloper.show',compact('progress', 'project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProgressReport $progress)
    {
        $projects=Project::all();
        return view('LeadDeveloper.edit',compact('progress','projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProgressReport $progress)
    {
        $validated = $request->validate([
            'project_id' =>'int',
            'progress_date'=>'date',
            'progress_status' => 'string|in:ahead-of-schedule,on-schedule,delayed,completed',
            'description' =>'min:4|string|max:255'
        ]);

        $progress->update($request->all());

        return redirect()->route('progress.index')
            ->withSuccess('Progress record has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProgressReport $progress)
    {
        $progress->delete();
        return redirect()->route('progress.index');
    }
}
