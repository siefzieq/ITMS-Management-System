<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use App\Models\LeadDeveloper;
use App\Models\Order;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('manager.index', compact('projects'));
    }

    public function list()
    {
        $projects = Project::all(); // Fetch all requests from the database
        return view('manager.list', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $LeadDeveloper=LeadDeveloper::all();
        $Developer=Developer::all();
        $orders=Order::all();
        return view('manager.create',compact('LeadDeveloper','Developer','orders'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $start_date = $request->input('project_start');
        $end_date = $request->input('project_end');
        $duration = null;

        if ($start_date && $end_date) {
            $startDate = new \DateTime($start_date);
            $endDate = new \DateTime($end_date);

            $difference = $startDate->diff($endDate);
            $duration = $difference->days;
        }



        $project = new Project;

        $developerIds = $request->input('developer_id');
        $project->project_title = $request->project_title;
        $project->order_id = $request->business_owner;
        $project->type = $request->type;
        $project->PIC =$request->PIC;
        $project->project_start = $request->project_start;
        $project->project_end = $request->project_end;
        $project->project_duration = $duration;
        $project->project_status = $request->project_status;
        $project->lead_id = $request->lead_id;
        $project->save();

        $project->developers()->attach($developerIds);

        return redirect()->route('project.index')
            ->withSuccess('New record added successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('manager.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $lead=LeadDeveloper::all();
        $developers=Developer::all();
        return view('manager.edit',compact('project','lead','developers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $project->update($request->all());

        return redirect()->route('project.index')
            ->withSuccess('Record has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('order.index');
    }
}
