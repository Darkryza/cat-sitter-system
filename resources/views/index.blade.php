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
                <h2>Welcome to  <span> CAT SITTER !</span></h2>
                <p>
                    We understand that your cats are more than just pets – they’re family. That’s why we offer a dedicated in-home cat-sitting service that provides peace of mind when you can’t be there. Whether you’re traveling, busy at work, or simply need a helping hand, we’re here to make sure your feline friends are well taken care of in the comfort of their own home. <br><br>
                    Our approach is simple: provide loving, reliable, and personalized care tailored to each cat’s unique personality and needs. From feeding and playtime to administering medication or simply providing comforting company, we treat every cat with the same attention and affection we would give our own. <br><br>
                    Let us help you keep your cats happy, healthy, and stress-free while you’re away. Because when it comes to your cats, they deserve nothing but the best.
                </p>
            </div>
        </div>
    </div>
@endsection