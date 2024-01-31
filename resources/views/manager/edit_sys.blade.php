@extends('layouts.app')
@section('title', 'Edit Project Details')
@section('content')
    <div class="container" style="padding-top: 40px">
        <h3>Edit Development Details</h3>
        <p>Please enter the details</p>
        <form method="POST" action="{{route('devInfo.update',$devInfo)}}">
            @method('PATCH')
            @csrf
            <div class="card">
                <h4 class="card-header text-white text-center" style="background-color:#0461AA; padding: 18px 5px 10px 5px;">Development {{$devInfo->id}}</h4>
                <div class="card-body">
                    <div class="form-group  row mb-3">
                        <label for="project_id" class="col-sm-2 col-form-label">Project Title</label>
                        <div class="col-sm-10">
                            <input  type="text" name="requestor" class="form-control" id="project_id" value="{{ $devInfo->projects->project_title}}" readonly>
                            @error('project_title')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="PIC" class="col-sm-2 col-form-label">Method</label>
                        <div class="col-sm-10">
                            <input type="text" name="dev_method" class="form-control" id="method" value="{{$devInfo->dev_method }}">
                            @error('method')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group  row mb-3">
                        <label for="platform" class="col-sm-2 col-form-label">System Platform</label>
                        <div class="col-sm-10">
                            <select name="platform" class="form-control" id="platform">
                                <option value="web-based" {{ $devInfo->platform == 'web-based' ? 'selected' : '' }}>Web based</option>
                                <option value="mobile" {{ $devInfo->platform == 'mobile' ? 'selected' : '' }}>Mobile</option>
                                <option value="stand-alone-system" {{ $devInfo->platform == 'stand-alone-system' ? 'selected' : '' }}>Stand alone system</option>
                            </select>
                            @error('platform')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group  row mb-3">
                        <label for="type" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-10">
                            <select name="type" class="form-control" id="type">
                                <option value="on-premises" {{ $devInfo->type == 'on-premises' ? 'selected' : '' }}>on premises</option>
                                <option value="cloud" {{ $devInfo->type == 'cloud' ? 'selected' : '' }}>cloud</option>
                            </select>
                            @error('type')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3 float-right">
                <a class="btn text-white" style=background-color:#007ea7; href="{{route('devInfo.show',$devInfo->id)}}">Back</a>&nbsp;
                <input class="btn text-white" style=background-color:#0461AA; type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection
