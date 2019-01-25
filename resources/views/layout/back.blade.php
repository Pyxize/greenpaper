<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.css')}}"  media="screen,projection"/>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="icon" type="image/png" href="{{ asset('img/paper_logo.png') }}">
    <title>Green'Paper</title>
</head>
<body>
@yield('sidebar')
<div class="relative">
    <nav class="h23vh">
        <div class="flex flex-c-c flex-a-cnav-wrapper w70 marg-a pad-20">
            <a href="/" class="left marg-r30">
                <img class="logo" src="{{asset('img/paper_logo.png')}}" alt="papergreen">
            </a>
        </div>
        <ul class="sidenav" id="mobile-demo">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">Javascript</a></li>
            <li><a href="mobile.html">Mobile</a></li>
        </ul>
    </nav>
</div>

<div>
    @yield('content')
</div>

<!--JavaScript -->
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>
