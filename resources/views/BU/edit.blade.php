@extends('layouts.app')
@section('title', 'Edit Details')
@section('content')
    <div class="container" style="padding-top: 40px;">
        <h3>Edit Request Details</h3>
        <p>Please edit request details</p>
        <form method="POST" action="{{route('order.update',$order)}}">
            @method('PATCH')
            @csrf
            <div class="card">
                <h4 class="card-header text-center text-white" style="background-color:#0461AA; padding: 18px 5px 10px 5px;">Request {{$order->id}}</h4>
                <div class="card-body">
                    <div class="form-group  row mb-3">
                        <label for="requestor" class="col-sm-2 col-form-label">Requestor</label>
                        <div class="col-sm-10">
                            <input  type="text" name="requestor" class="form-control" id="requestor" value="{{ $order->requestor}}">
                            @error('requestor')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group  row mb-3">
                        <label for="mobile" class="col-sm-2 col-form-label">Mobile Number</label>
                        <div class="col-sm-10">
                            <input type="text" name="mobile" class="form-control" id="mobile" value="{{ $order->mobile }}">
                            @error('mobile')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group  row mb-3">
                        <label for="BU" class="col-sm-2 col-form-label">Business Unit</label>
                        <div class="col-sm-10">
                            <select name="type" class="form-control" id="type">
                                <option value="Finance" {{ $order->BU == 'Finance' ? 'selected' : '' }}>Finance</option>
                                <option value="IT" {{ $order->BU == 'IT' ? 'selected' : '' }}>IT</option>
                                <option value="HumanResource" {{ $order->BU == 'HumanResource' ? 'selected' : '' }}>Human Resource</option>
                                <option value="InternationalOffice" {{ $order->BU == 'InternationalOffice' ? 'selected' : '' }}>International Office</option>
                            </select>
                            @error('BU')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group  row mb-3">
                        <label for="project_title" class="col-sm-2 col-form-label">Project Title</label>
                        <div class="col-sm-10">
                            <input type="text" name="project_title" class="form-control" id="project_title" value="{{ $order->project_title }}">
                            @error('project_title')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group  row mb-3">
                        <label for="summary" class="col-sm-2 col-form-label">Summary</label>
                        <div class="col-sm-10">
                            <input type="text" name="summary" class="form-control" id="summary" value="{{ $order->summary }}">
                            @error('summary')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3 float-right">
                <a class="btn btn-info " href="{{route('order.show',$order->id)}}">Back</a>&nbsp;
                <input class="btn btn-primary" type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection
