<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ config('title', 'Sign Up') }} </title>
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
            <h3 class="text-primary text-center">Sign Up</h3>
            <br><br>
            <form method="POST" action="{{route('users.save')}}">
                @csrf
                <div class="form_login">
                    <div class="input_div">
                        <input type="text" class="input_form" placeholder="User Name" name="userName" value="{{ old('userName') }}"  autocomplete="userName" autofocus >
                        @error('userName')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="input_div">
                        <input type="email" class="input_form" placeholder=" Email" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="input_div">
                        <input type="password" class="input_form @error('password') is-invalid @enderror" placeholder="Password"  name="password"  autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="input_div">
                        <input type="password" class="input_form" placeholder="Confirm Password" name="password_confirmation"  autocomplete="new-password">
                        @error('Confirm_Password"')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="input_div">
                        <select  class="input_form"  name="type" id="">
                            <option disabled value="">select user's type</option>
                            <option value="1">General</option>
                            <option value="2">Student</option>
                        </select>
                        @error('type')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="btn_login" style="margin: 5% !important;">
                    <a href="./newpassword.html"><button class="login_now">continue</button></a>
                </div>

                <div class="have_account">
                    <h6>I already have an account <span><a href="{{route('users.login')}}">Login now</a></span></h6>
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
