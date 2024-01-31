@extends('layouts.app')
@section('title', 'Project Details')
@section('content')
    <div class="container" style="padding-top: 40px">
        <div class="card"style="border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <div class="card-header text-white" style="background-color:#0461AA; padding: 18px 5px 10px 5px;"><h4><center>Project Details</center></h4></div>
            <div class="card-body">
                <table class="table table-borderless" >
                    <tr>
                        <td>Project Title</td>
                        <td>{{$project->project_title}}</td>
                    </tr>
                    <tr>
                        <td>Business Owner</td>
                        <td>{{$project->order->requestor}}</td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td>{{$project->type}}</td>
                    </tr>
                    <tr>
                        <td>PIC</td>
                        <td>{{$project->PIC}}</td>
                    </tr>
                    <tr>
                        <td>Project Start</td>
                        <td>{{$project->project_start}}</td>
                    </tr>
                    <tr>
                        <td>Project End</td>
                        <td>{{$project->project_end}}</td>
                    </tr>
                    <tr>
                        <td>Project Duration</td>
                        <td>{{$project->project_duration}} day(s)</td>
                    </tr>
                    <tr>
                        <td>Project Status</td>
                        <td>{{$project->project_status}}</td>
                    </tr>
                    <tr>
                        <td>Lead Developer</td>
                        <td>{{$project->LeadDeveloper->name ?? 'None'}}</td>
                    </tr>
                    @php($i=1)
                    @foreach ($project->developers as $developer)
                        <tr>
                            <td>Developer {{ $i++ }}</td>
                            <td> {{ $developer->name }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="text-center mt-3">
            <form action="{{ route('project.destroy', $project->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a class="btn text-white" style=background-color:#0461AA; href="{{route('project.index')}}">Back</a>
                <a class="btn text-white" style=background-color:#007ea7; href="{{route('project.edit', $project->id)}}">Edit Details</a>
                <input class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('Confirm DELETE? this request {{ $project->project_title }}')">
            </form>
        </div>
        <br><br>
    </div>
@endsection
