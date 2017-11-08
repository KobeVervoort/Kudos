<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-social.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <title>Kudos</title>
</head>
<body>

@if($authUser != null)

    <nav class="nav nav-pills">
        <div class="container nav-container">
            <a href="/home" class="nav-item nav-link logo"><img src="{{ URL::asset('img/logo-small.png')}}" alt="" class="img-fluid"></a>
            <a href="/users" class="nav-item nav-link">Give a compliment</a>
            <a href="/compliments/received" class="nav-item nav-link">Compliments received

            </a>
            <a href="/compliments/given" class="nav-item nav-link">Compliments given</a>
            <div class="nav-item d-flex ml-auto user-info">
                <p class="auth-user-name">{{$authUser['name']}}</p>
                <img src="{{$authUser['avatar']}}" alt="" class="rounded-circle auth-user-pic">
            </div>
        </div>
    </nav>

    <div class="header">

        <div class="container">

            @yield('header')

        </div>

    </div>

@endif

<div class="main">

    @yield('content')

</div>

@yield('footer')

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://use.fontawesome.com/c07a771349.js"></script>

</body>
</html>