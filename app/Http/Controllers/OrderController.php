<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all(); // Fetch all requests from the database

        return view('BU.request', compact('orders'));
    }

    public function list()
    {
        $orders = Order::all(); // Fetch all requests from the database

        return view('BU.list', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('BU.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'requestor' => 'required|min:4|string|max:255',
            'mobile' => 'required|min:6|string|max:255',
            'BU' => 'required|string|in:Finance,IT,HumanResource,InternationalOffice',
            'project_title' => 'required|min:6|string|max:255',
            'summary' => 'required|min:6|string|max:255',
        ]);

        $order = new Order;
        $order->requestor = $request->requestor;
        $order->mobile = $request->mobile;
        $order->mobile = $request->mobile;
        $order->BU = $request->BU;
        $order->project_title = $request->project_title;
        $order->summary = $request->summary;
        $order->save();

        return redirect()->route('order.index')
            ->withSuccess('New record added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $orders = Order::all();
        return view('BU.show',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return view('BU.edit',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'requestor' => 'min:4|string|max:255',
            'mobile' => 'min:6|string|max:255',
            'BU' => 'string|in:web-based,mobile,HumanResource,InternationalOffice',
            'project_title' => 'min:6|string|max:255',
            'summary' => 'min:6|string|max:255',
        ]);

        $order->update($request->all());

        return redirect()->route('order.index')
            ->withSuccess('Record has been updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('order.index');
    }
}
