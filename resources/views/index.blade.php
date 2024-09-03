@extends('include.layout')
@section('content')
    <nav>
        <a href="#"><img src="{{ asset('images/LOGO-removebg-preview.png') }}" alt="logo" class="logo"></a>
        <ul class="navbar-list">
            <li><a href="#">About</a></li>
            <li><a href="#">Package</a></li>
            <li><a href="#">Apply</a></li>
            <li><a href="#">More</a></li>
        </ul>
    </nav>
    <div class="hero">
        <img src="{{ asset('images/bg1.jpg') }}" alt="bg" class="bg">
        <div class="welcome-title">
            <h1 class="title">WELCOME TO <br> CAT SITTER</h1>
        </div>
    </div>
    <div class="hero">
        <img src="{{ asset('images/bg2.jpg') }}" alt="" class="bg">
        <img src="{{ asset('images/cat.png') }}" alt="cat" class="cat">
        <div class="about-us-container">
            <h2 class="about-us-title">ABOUT US</h2>
            <div class="about-us-text">
                
            </div>
        </div>
    </div>
@endsection