
<div>
    @extends('layouts.app')

    @section('title', 'My Request')

    @section('content')
        <h2>New Request</h2>
        <p>Make a Wish: Your Requests, Our Mission.</p>
        <div class="container" style='background-color:white; margin-top: 20px; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);'>
            <form method="POST" action="{{route('order.store')}}">
                @csrf
                <div class="form-group">
                    <label>Requestor</label>
                    <input type="text" class="form-control" id = "requestor" name="requestor" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label >Phone Number</label>
                    <input type="text" class="form-control" id = "mobile" name="mobile" placeholder="Enter your phone number">
                </div>
                <div class="form-group">
                    <label >Business Unit</label>
                    <select class="form-control" name="BU" id="BU">
                        <option value="Finance">Finance</option>
                        <option value="IT">IT</option>
                        <option value="HumanResource">Human Resource</option>
                        <option value="InternationalOffice">International Office</option>
                    </select>
                </div>
                <div class="form-group">
                    <label >Project Title</label>
                    <input type="text" class="form-control" id = "project_title" name="project_title" placeholder="Enter the proposed system name">
                </div>
                <div class="form-group">
                    <label >Summary</label>
                    <textarea class="form-control" id="summary" name="summary" rows="3" cols="10" placeholder="Please enter the system description"></textarea>
                </div>
                <button type="submit" class="btn text-white d-flex justify-content-between align-items-center ml-auto" style="background-color: #0461AA">Submit</button>
                </form>
            </div>
    @endsection

</div>
