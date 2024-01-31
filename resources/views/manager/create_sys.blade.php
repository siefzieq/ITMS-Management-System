@extends('layouts.app')

@section('title', 'System Development')

@section('content')
    <div class="container" style="padding-top: 40px">
        <h2>Development Info</h2>
        <p>Please enter the project development details</p>
        <div class="container" style='margin-top: 20px; background-color: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);'>
            <form method="POST" action="{{route('devInfo.store')}}">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="project_id">Project Title</label>
                            <select class="form-control" name="project_id" id="project_id">
                                <option selected>Select the project title</option>
                                @foreach($projects as $p)
                                    <option value="{{$p->id}}">{{$p->project_title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Development Methodology</label>
                            <input type="text" class="form-control" name="dev_method" id="dev_method" placeholder="Enter system methodology used">
                            <small>e.g. Waterfall Methodology</small>
                        </div>
                        <div class="form-group">
                            <label>System Platform</label>
                            <select name="platform" id="platform" class="custom-select">
                                <option value="web-based">Web-based</option>
                                <option value="mobile">Mobile</option>
                                <option value="stand-alone-system">Stand-alone system</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Deployment Type</label>
                            <select name="type" id="type" class="custom-select">
                                <option value="on-premises">On-premises</option>
                                <option value="cloud">Cloud</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn text-white d-flex justify-content-between align-items-center ml-auto" style="background-color: #0461AA">Submit</button>
            </form>
        </div>
    </div>
@endsection
