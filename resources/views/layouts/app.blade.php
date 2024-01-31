<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ITMS Software Project Management')</title>
    <!-- Include Bootstrap CSS from CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    @vite(['resources/js/app.js'])
    <style>

        body {
            background-color: #F3F6FE;
        }

    </style>
</head>
<body>

<!-- Image and text -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0461AA; padding-left: 70px; padding-right: 70px; padding-bottom: 10px;  padding-top: 10px">
    <a class="navbar-brand mb-0 h1 text-white" href="#">
        <img src="/UNITEN.png" width="40" height="30" class="d-inline-block align-top" alt="">
        ITMS (IPROS)
    </a>
        <div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                @can('isLead')
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="{{ route('progress.index') }}">Reports<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('progress.create')}}">New Reports</a>
                    </li>
                @elsecan('isBU')
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="{{ route('order.index') }}">My Requests <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('order.create')}}">New Request</a>
                    </li>
                @elsecan('isManager')
                    <li class="nav-item active dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects</a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('project.create')}}">New Project</a>
                            <a class="dropdown-item" href="{{route('project.index')}}">View Projects</a>
                        </div>
                    </li>
                    <li class="nav-item active dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Development</a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('devInfo.create')}}">New Development</a>
                            <a class="dropdown-item" href="{{route('devInfo.index')}}">View Development</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="{{ route('progress.index') }}">Reports<span class="sr-only"></span></a>
                    </li>
                @endcan
            </ul>
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                            <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>

        </div>
    </nav>



<div class="container-fluid" style='margin-top: 50px; background-color: #F3F6FE;'>
    <div class="container" style='margin-top: 50px; background-color: #F3F6FE;'>
        <section>
            @yield('content')
        </section>
    </div>
</div>












</body>
</html>
