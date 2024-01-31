@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center"  >
        <div class="col-md-8" style="padding-top: 50px">
            <div class="card" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <div class="card-header" style="background-color: #0461AA; color: white;"><center>{{ __('Dashboard') }}</center></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            <{{ session('status') }}
                        </div>
                    @endif

                    <center>{{ __('You are logged in!') }} </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
