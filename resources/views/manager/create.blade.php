@extends('layouts.app')

@section('title', 'Project Details')

@section('content')
    <div class="container" style="padding-top: 40px">
        <h2>Project Details</h2>
        <p>Please enter the project details</p>
        <div class="container" style='margin-top: 20px; background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);'>
            <form method="POST" action="{{route('project.store')}}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            @php($i=1)
                            <label for="order_id">Business Owner</label>
                            <select class="form-control" name="business_owner" id="order_id">
                                <option selected>Select the business owner</option>
                                @foreach($orders as $o)
                                    <option value="{{$o->id}}">{{$o->requestor}}-{{$o->project_title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Project Title</label>
                            <input type="text" class="form-control" name="project_title" id="project_title" placeholder="Enter the project title">
                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <select class="form-control" name="type" id="type">
                                <option selected>Select the type</option>
                                    <option value="New">New</option>
                                <option value="Enhancement">Enhancement</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Person In-Charge</label>
                            <input type="text" class="form-control" name="PIC" id="PIC" placeholder="Enter the PIC's name" value="Dr. Ts. Mohd Hazli bin Mohamed Zabil" readonly>
                        </div>
                        <div class="form-group">
                            <label>Project Start Date</label>
                            <input type="date" class="form-control @error('project_start') is-invalid @enderror" name="project_start" id="project_start" placeholder="Project Start Date" value="{{ old('project_start') }}">
                            @error('project_start')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Project End Date</label>
                            <input type="date" class="form-control @error('project_end') is-invalid @enderror" name="project_end" id="project_end" placeholder="Project End Date" value="{{ old('project_end') }}">
                            @error('project_end')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Project Status</label>
                            <select class="form-control" name="project_status" id="project_status">
                                <option value="to-do">to-do</option>
                                <option value="ongoing">on-going</option>
                                <option value="completed">completed</option>
                            </select>
                        </div>
                        <div class="form-group">
                        @php($i=1)
                        <label for="lead_id">Lead Developer</label>
                        <select class="form-control" name="lead_id" id="lead_id">
                            <option selected>Select the lead developer</option>
                            @foreach($LeadDeveloper as $s)
                                <option value="{{$s->id}}">{{$s->name}}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="developer_id">Developer</label>
                        <select class="form-control" name="developer_id[]" multiple>
                            <option selected>Select the developer(s)</option>
                            @foreach($Developer as $s)
                                <option value="{{$s->id}}">{{$s->name}}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn text-white d-flex justify-content-between align-items-center ml-auto" style="background-color: #0461AA">Submit</button>
            </form>
        </div>
    </div>
@endsection
