<?php

namespace App\Http\Controllers;

use App\Models\DevInfo;
use App\Models\Order;
use App\Models\Project;
use Illuminate\Http\Request;

class DevInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $devInfos=DevInfo::all();
        return view('manager.index_sys',compact('devInfos'));
    }

    public function list()
    {
        $devInfos=DevInfo::all();
        return view('manager.list_sys',compact('devInfos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects=Project::all();
        return view('manager.create_sys',compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*$validated = $request->validate([
            'dev_method' => 'required|min:6|string|max:255',
            'project_id' => 'required|int',
            'platform' => 'required|string|in:web-based,mobile,stand-alone-system',
            'type' => 'required|string|in:on-premises, cloud',
        ]);
        */
        $devInfo = new devInfo;
        $devInfo->project_id =  $request->project_id;
        $devInfo->dev_method =  $request->dev_method;
        $devInfo->platform =  $request->platform;
        $devInfo->type =  $request->type;
        $devInfo->save();

        return redirect()->route('devInfo.index')
            ->withSuccess('Record added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(DevInfo $devInfo)
    {
        return view('manager.show_sys',compact('devInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DevInfo $devInfo)
    {
        $projects=Project::all();
        return view('manager.edit_sys',compact('devInfo','projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DevInfo $devInfo)
    {
        /*$validated = $request->validate([
            'project_id' => 'required|int',
            'method' => 'min:6|string|max:255',
            'platform' => 'string|in:web-based, mobile, stand-alone-system',
            'type' => 'string|in:on-premises, cloud',
        ]);*/

        $devInfo->update($request->all());

        return redirect()->route('devInfo.index')
            ->withSuccess('Record has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DevInfo $devInfo)
    {
        $devInfo->delete();
        return redirect()->route('devInfo.index');
    }
}
