@extends('layouts.app')
@section('title', 'Development Details')
@section('content')
    <div class="container" style="padding-top: 40px">
        <div class="card"style="border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <div class="card-header text-white" style="background-color:#0461AA; padding: 18px 5px 10px 5px;"><h4><center>Development Details</center></h4></div>
            <div class="card-body">
                <table class="table table-borderless" >
                    <tr>
                        <td>Project Title</td>
                        <td>{{$devInfo->projects->project_title}}</td>
                    </tr>
                    <tr>
                        <td>Development details</td>
                        <td>{{$devInfo->dev_method}}</td>
                    </tr>
                    <tr>
                        <td>Platform</td>
                        <td>{{$devInfo->platform}}</td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td>{{$devInfo->type}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="text-center mt-3">
            <form action="{{ route('devInfo.destroy', $devInfo->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a class="btn text-white" style=background-color:#0461AA; href="{{route('devInfo.index')}}">Back</a>
                <a class="btn text-white" style=background-color:#007ea7; href="{{route('devInfo.edit', $devInfo->id)}}">Edit Details</a>
                <input class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('Confirm DELETE? this request {{ $devInfo->projects->project_title }}')">
            </form>

        </div>
    </div>
@endsection
