@extends('layouts.master')
@section('title')Welcome to Snub
@endsection
@section('content')

    <div class="snub animated bounceInLeft">
        Welcome to Snub
    </div>
    <div class="jumbotron a animated bounceInRight">
        <strong>Snub</strong> is an indian platform which is used as a social networking site
        for earning money.
    </div>
    <div class="well g na">
        You have Succesfully Signed up. Thanking you. For login click here <a href="{{'/welcome'}}" class="na2">SignIn</a>
    </div>

    <div class="container">
        <div class="row foo">
            All the copyright has been reserved by Snub Inc.
        </div>
        </div>
        @endsection