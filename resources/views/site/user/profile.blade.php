@extends('site.layouts.app')
@section('title', 'Profile')
@section('content')
<div class="personal_form">
    <div class="front_form">
        <h2>Peronal Profile</h2>
    </div>

    <div class="container">
        <form method="POST" action="{{route('profile.update',Auth::id())}}" style="margin-top: 3%;" >
            @csrf
            {{ method_field('PUT') }}
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" placeholder="Your name.." value="{{$user->name}}">

            @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <label >Email Address</label>
            <input type="email" id="email" name="email" placeholder="Your Email address.." value="{{$user->email}}" disabled>
            @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label>Current Password</label>
            <input type="password"  placeholder="Your New  Password.." name="password">
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="btn_contact">
                <button class="btn_msg"> Save</button>
            </div>

        </form>
    </div>
</div>
@stop
