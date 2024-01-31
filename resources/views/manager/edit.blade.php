@extends('layouts.app')
@section('title', 'Edit Project Details')
@section('content')
    <div class="container" style="padding-top: 40px">
        <h3>Edit Project Details</h3>
        <p>Please edit the details</p>
        <form method="POST" action="{{route('project.update',$project)}}">
            @method('PATCH')
            @csrf
            <div class="card">
                <h4 class="card-header text-white text-center" style="background-color:#0461AA; padding: 18px 5px 10px 5px;">Project {{$project->id}}</h4>
                <div class="card-body">
                    <div class="form-group  row mb-3">
                        <label for="requestor" class="col-sm-2 col-form-label">Project Title</label>
                        <div class="col-sm-10">
                            <input  type="text" name="requestor" class="form-control" id="project_id" value="{{ $project->project_title}}">
                            @error('project_title')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="order_id" class="col-sm-2 col-form-label">Requestor</label>
                        <div class="col-sm-10">
                            <input type="text" name="progress_date" class="form-control" id="progress_date" value="{{$project->order->requestor }}" readonly>
                            @error('requestor')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group  row mb-3">
                        <label for="project_title" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-10">
                            <select name="type" class="form-control" id="type">
                                <option value="New" {{ $project->type == 'New' ? 'selected' : '' }}>New</option>
                                <option value="Enhancement" {{ $project->type == 'Enhancement' ? 'selected' : '' }}>Enhancement</option>
                            </select>
                            @error('type')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="PIC" class="col-sm-2 col-form-label">Person In Charge</label>
                        <div class="col-sm-10">
                            <input type="text" name="PIC" class="form-control" id="PIC" value="{{$project->PIC }}">
                            @error('PIC')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="project_start" class="col-sm-2 col-form-label">Project Start</label>
                        <div class="col-sm-10">
                            <input type="date" name="project_start" class="form-control" id="project_start" value="{{$project->project_start }}">
                            @error('project_start')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="project_end" class="col-sm-2 col-form-label">Project End</label>
                        <div class="col-sm-10">
                            <input type="date" name="project_end" class="form-control" id="project_end" value="{{$project->project_end }}">
                            @error('project_end')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="project_duration" class="col-sm-2 col-form-label">Project Duration</label>
                        <div class="col-sm-10">
                            <input type="text" name="project_duration" class="form-control" id="project_duration" value="{{$project->project_duration }}" readonly>
                            @error('project_duration')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group  row mb-3">
                        <label for="project_status" class="col-sm-2 col-form-label">Type</label>
                        <div class="col-sm-10">
                            <select name="project_status" class="form-control" id="project_status">
                                <option value="to-do" {{ $project->project_status == 'to-do' ? 'selected' : '' }}>to-do</option>
                                <option value="on-going" {{ $project->project_status == 'on-going' ? 'selected' : '' }}>on-going</option>
                                <option value="completed" {{ $project->project_status == 'completed' ? 'selected' : '' }}>completed</option>
                            </select>
                            @error('type')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group  row mb-3">
                        <label for="lead_id" class="col-sm-2 col-form-label">Lead Developer</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="lead_id" id="lead_id">
                                @foreach($lead as $l)
                                    <option value="{{ $l->id }}" {{ optional($project->LeadDeveloper)->id == $l->id ? 'selected' : '' }}>
                                        {{ $l->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('type')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="developer_id[]" class="col-sm-2 col-form-label">Developers</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="developer_id[]" id="developer_id" multiple>
                                @foreach($developers as $developer)
                                    <option value="{{ $developer->id }}" {{ in_array($developer->id, $project->developers->pluck('id')->toArray()) ? 'selected' : '' }}>
                                        {{ $developer->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('developer_id')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>

                </div>
            </div>
            <div class="text-center mt-3 float-right">
                <a class="btn text-white" style=background-color:#007ea7; href="{{route('project.show',$project->id)}}">Back</a>&nbsp;
                <input class="btn text-white" style=background-color:#0461AA; type="submit" value="Submit">
                <br><br>
            </div>
        </form>

    </div>
@endsection
