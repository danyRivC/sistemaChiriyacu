<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{HTML::style('css/bootstrap.css')}}
    {{HTML::style('css/style.css')}}
    {{HTML::script('js/jquery-2.1.4.min.js')}}
    {{HTML::script('js/simpleCart.min.js')}}
    {{HTML::script('js/pignose.layerslider.js')}}
    {{HTML::script('js/bootstrap.min.js')}}


    <title>@yield('title')</title>
</head>
<body>
@section('header')
    @include('includes.header')
@show

    @yield('content')

@section('footer')
    @include('includes.footer')
@show
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</body>
</html>

