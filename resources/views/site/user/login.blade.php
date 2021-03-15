<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ config('title', 'Log In') }} </title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('site/css/style.default.css')}}" id="theme-stylesheet">
    <link rel="stylesheet" href="{{asset('site/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href={{asset('site/vendor/font-awesome/css/font-awesome.min.css')}}"">
    <link rel="shortcut icon" href="{{asset('site/img/logo.ico')}}">
    <link rel="stylesheet" href="{{asset('site/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/media.css')}}">
    <link rel="stylesheet" href="{{asset('site//js/function.js')}}">
    <link rel="stylesheet" href="{{asset('site/css/style.css')}}">


</head>
<body>

<div class="login_div" style="height: 100%;">

    <div class="forget_hero" style="top: 6% !important;">

        <div class="control" style="width: 400px;">
            <div class="logo_img" style="margin: 0px !important;">
                <img src="{{asset('site/img/logo.png')}}" class="logo_design">
            </div>
            <br>
            <h3 class="text-primary text-center">Sign In</h3>
            <br><br>
            <form method="POST" action="{{route('users.sign')}}">
                @csrf
                <div class="form_login">

                    <div class="input_div">
                        <input type="email" class="input_form" placeholder=" Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="input_div">
                        <input type="password" class="input_form" placeholder="Password" name="password">
                        @error('userName')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="remember_div">
                        <input type="checkbox" class="remember">
                        <p class="remember-txt">Remember me</p>
                    </div>
                    <br>

                    <div class="btn_login" style="margin: 5% !important;">
                        <a href="#"><button class="login_now">continue</button></a>
                    </div>



                </div>

            </form>





        </div>
    </div>

    <div class="area" >
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div >


</div>
{{asset('site/')}}


<!-- JavaScript files-->
<script src="{{asset('site/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('site/vendor/popper.js/umd/popper.min.js')}}"> </script>
<script src="{{asset('site/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('site/js/function.js')}}"></script>
<!-- Main File-->
<script src="{{asset('site/js/front.js')}}"></script>
</body>
</html>
