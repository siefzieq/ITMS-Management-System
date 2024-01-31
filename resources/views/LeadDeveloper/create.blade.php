@extends('layouts.app')
@section('title', 'Progress Report')
@section('content')
    <div class="container" style="padding-top: 40px">
        <h2>Progress Report</h2>
        <p>Please enter the progress details</p>
        <div class="container" style='margin-top: 20px; background-color:white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);'>
            <form method="POST" action="{{route('progress.store')}}">
                @csrf
                <div class="form-group">
                    @php($i=1)
                    <label for="project_id">Project Title</label>
                    <select class="form-control" name="project_id" id="project_id">
                        <option selected>Select the project title</option>
                        @foreach($projects as $p)
                            <option value="{{$p->id}}">{{$p->project_title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="progress_date">Progress Date</label>
                    <input type="date" class="form-control @error('progress_date') is-invalid @enderror" name="progress_date" placeholder="dd/mm/yyyy">
                    @error('progress_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="progress_status">Current Status</label>
                    <select class="form-control" name="progress_status" id="progress_status">
                        <option value="ahead-of-schedule">Ahead of Schedule</option>
                        <option value="on-schedule">On Schedule</option>
                        <option value="delayed">Delayed</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id = "description" name="description" placeholder="Enter the progress description">
                </div>
                <button type="submit" class="btn text-white d-flex justify-content-between align-items-center ml-auto" style="background-color: #0461AA;">Submit</button>
            </form>
        </div>
    @endsection
</div>

