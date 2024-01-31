@extends('layouts.app')

@section('title', 'Progress report')
@section('content')
    <h2>Progress Report</h2>
    <div class="d-flex justify-content-between align-items-center">
        <p>LList of Progress Report</p>
        <div class="d-flex align-items-center">
            <a href="{{route('progress.index')}}" class="btn" role="button" aria-pressed="true" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Grid view">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-3x2-gap-fill" viewBox="0 0 16 16">
                    <path d="M1 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zM1 9a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1z"/>
                </svg>
            </a>
            <a href="{{route('progresslist')}}" class="btn mr-2" role="button" aria-pressed="true" data-bs-toggle="tooltip" data-bs-placement="bottom" title="List view">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                </svg>
            </a>
            <a href="{{ route('progress.create') }}" class="btn" role="button" aria-pressed="true" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Create new request">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
                </svg>
            </a>
        </div>
    </div>

    <br><br>

    @php($i=1)
    <div class="col">
        @foreach($progress as $p)
            <div class="col">
                <div class="card" style=" width: 60rem;; border-radius: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); ">
                    <div class="card-body">
                        <h3 class="card-title">Report {{ $i++ }}</h3>
                        <h5 class="card-title">{{ $p->project->project_title }}</h5>
                        <p class="card-text">{{ $p->progress_status}}</p>
                        <a class="btn text-white float-right" style="background-color:#0461AA;" href="{{ route('progress.show', $p->id) }}">More info</a>
                    </div>
                </div>
                <br>
            </div>
        @endforeach
    </div>
@endsection

