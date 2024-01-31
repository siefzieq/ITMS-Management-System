<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITMS Project Management System</title>
    <!-- Include Bootstrap CSS from CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    @vite(['resources/js/app.js'])
    <style>

        .landing-container {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px;
        }

        .landing-content {
            flex: 1;
            max-width: 50%;
        }

        .vector-image {
            flex: 1;
            max-width: 100%;
            text-align: right;
        }

        .vector-image img {
            width:1200px;
            max-width: 100%;
            height: 450px;
            max-height: 2000px;
        }

        .caption {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .btn-login {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #0461AA; padding-left: 70px; padding-right: 70px; padding-bottom: 10px;  padding-top: 10px">
        <a class="navbar-brand mb-0 h1 text-white" href="#">
            <img src="UNITEN.png" width="40" height="30" class="d-inline-block align-top" alt="">
            ITMS (IPROS)
        </a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('register') }}">Register</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Landing Page Content -->
<div class="container mt-5 landing-container mx-auto">
    <div class="landing-content">
        <h1>ITMS Project Management System</h1>
        <p class="caption">Unlocking Possibilities, Empowering Solutions: Navigate the Future with IPROS.</p>
        <a href="{{ route('login') }}" class="btn text-white btn-login" style="background-color: #0461AA; padding:10px 15px 10px 15px;">Get Started</a>
    </div>
    <div class="vector-image">
        <!-- Replace 'your-vector-image.jpg' with the path to your vector image -->
        <img src="/homepage.png" alt="Vector Image">
    </div>
</div>

<!-- Include Bootstrap JS and Popper.js from CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
