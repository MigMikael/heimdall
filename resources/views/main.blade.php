<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    @yield('graph')
    <title>{{ config('app.name') }}</title>
</head>
<body>
    <nav class="navbar visible-xs">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li @if(Request::is('dashboard')) class="active" @endif><a href="{{ url('dashboard') }}">Welcome</a></li>
                    <li @if(Request::is('beacon')) class="active" @endif><a href="{{ url('beacon') }}">Beacon</a></li>
                    <li @if(Request::is('event')) class="active" @endif><a href="{{ url('event') }}">Event</a></li>
                    {{--<li><a href="">Gender</a></li>
                    <li><a href="">Geo</a></li>--}}
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-2 sidenav hidden-xs">
                <h1>{{ config('app.name') }}</h1>
                <ul class="nav nav-pills nav-stacked">
                    <li @if(Request::is('dashboard')) class="active" @endif><a href="{{ url('dashboard') }}">Welcome</a></li>
                    <li @if(Request::is('beacon')) class="active" @endif><a href="{{ url('beacon') }}">Beacon</a></li>
                    <li @if(Request::is('event')) class="active" @endif><a href="{{ url('event') }}">Event</a></li>
                    {{--<li><a href="">Gender</a></li>
                    <li><a href="">Geo</a></li>--}}
                </ul><br>
            </div>
            <br>
            <div class="col-sm-10 content">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>