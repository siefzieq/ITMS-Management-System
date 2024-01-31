@extends('layouts.app')
@section('title', 'Edit Progress Details')
@section('content')
    <div class="container" style="padding-top: 40px">
        <h3>Edit Development Details</h3>
        <p>Please enter the report details</p>
        <form method="POST" action="{{route('progress.update',$progress)}}">
            @method('PATCH')
            @csrf
            <div class="card">
                <h4 class="card-header text-white text-center" style="background-color:#0461AA; padding: 18px 5px 10px 5px;">Report {{$progress->id}}</h4>
                <div class="card-body">
                    <div class="form-group  row mb-3">
                        <label for="project_id" class="col-sm-2 col-form-label">Project Title</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="project_id" id="project_id" readonly>
                                @foreach($projects as $p)
                                    <option value="{{ $p->id }}" {{ optional($progress->project)->id == $p->id ? 'selected' : '' }} readonly>
                                        {{ $p->project_title }}
                                    </option>
                                @endforeach
                            </select>
                            @error('project_id')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="progress_date" class="col-sm-2 col-form-label">Progress date</label>
                        <div class="col-sm-10">
                            <input type="date" name="progress_date" class="form-control" id="progress_date" value="{{$progress->progress_date }}">
                            @error('progress_date')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group  row mb-3">
                        <label for="progress_status" class="col-sm-2 col-form-label">Current Status</label>
                        <div class="col-sm-10">
                            <select name="progress_status" class="form-control" id="progress_status">
                                <option value="ahead-of-schedule" {{ $progress->progress_status == 'ahead-of-schedule' ? 'selected' : '' }}>Ahead of Schedule</option>
                                <option value="on-schedule" {{ $progress->progress_status == 'on-schedule' ? 'selected' : '' }}>On Schedule</option>
                                <option value="delayed" {{ $progress->progress_status == 'delayed' ? 'selected' : '' }}>Delayed</option>
                                <option value="completed" {{ $progress->progress_status == 'completed' ? 'selected' : '' }}>Completed</option>
                            </select>
                            @error('progress_status')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Remarks</label>
                        <div class="col-sm-10">
                            <input type="text" name="description" class="form-control" id="description" value="{{$progress->description }}">
                            @error('description')
                            <strong style="width: 100%; margin-top: 0.25rem; font-size: 80%;color: #e3342f;">{{ $message }}</strong>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3 float-right">
                <a class="btn text-white" style=background-color:#007ea7; href="{{route('progress.show',$progress->id)}}">Back</a>&nbsp;
                <input class="btn text-white" style=background-color:#0461AA; type="submit" value="Submit">
            </div>
        </form>
    </div>
@endsection
