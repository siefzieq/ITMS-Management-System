@extends('layouts.app')
@section('title', 'Request Details')
@section('content')
    <div class="container" style="padding-top: 40px;">
        <div class="card" style="border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <div class="card-header text-white" style="background-color:#0461AA; padding: 18px 5px 10px 5px;"><h4><center>Request Details</center></h4></div>
            <div class="card-body">
                <table class="table table-borderless" >
                    <tr>
                        <td>Requestor</td>
                        <td>{{$order->requestor}}</td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>{{$order->mobile}}</td>
                    </tr>
                    <tr>
                        <td>Business Unit</td>
                        <td>{{$order->BU}}</td>
                    </tr>
                    <tr>
                        <td>Project Title</td>
                        <td>{{$order->project_title}}</td>
                    </tr>
                    <tr>
                        <td>Summary</td>
                        <td>{{$order->summary}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="text-center mt-3">
            <form action="{{route('order.destroy',$order)}}" method="POST">
                @csrf
                @method('DELETE')
                <a class="btn text-white" style=background-color:#0461AA; href="{{route('order.index')}}">Back</a>
                <a class="btn text-white" style=background-color:#007ea7; href="{{route('order.edit', $order->id)}}">Edit Details</a>
                <input class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('Confirm DELETE? this request {{$order->project_title}}')">
            </form>
        </div>
    </div>
@endsection
