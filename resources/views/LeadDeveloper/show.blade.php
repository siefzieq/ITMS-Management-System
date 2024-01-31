@extends('layouts.app')
@section('title', 'Progress Report Details')
@section('content')
    <div class="container" style="padding-top: 40px">
        <div class="card"style="border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <div class="card-header text-white" style="background-color:#0461AA; padding: 18px 5px 10px 5px;"><h4><center>Progress Report Details</center></h4></div>
            <div class="card-body">
                <table class="table table-borderless" >
                    <tr>
                        <td style="padding-left: 50px">Project Title</td>
                        <td>{{$progress->project->project_title}}</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 50px">Progress Date</td>
                        <td>{{$progress->progress_date}}</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 50px">Current Status</td>
                        <td>{{$progress->progress_status}}</td>
                    </tr>
                    <tr>
                        <td style="padding-left: 50px">Remarks</td>
                        <td>{{$progress->description}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="text-center mt-3">
            <form action="{{ route('progress.destroy', $progress->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a class="btn text-white" style=background-color:#0461AA; href="{{route('progress.index',$progress->id)}}">Back</a>
                @can('isLead')
                <a class="btn text-white" style=background-color:#007ea7; href="{{route('progress.edit', $progress->id)}}">Edit Details</a>
                <input class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('Confirm DELETE? this request {{ $progress->project->project_title }}')">
                @endcan
            </form>

        </div>
    </div>
@endsection
