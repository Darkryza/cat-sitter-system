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
            <h1 class="welcome-title">WELCOME TO <br> CAT SITTER</h1>
        </div>
    </div>
    <div class="hero">
        <img src="{{ asset('images/bg2.jpg') }}" alt="" class="bg">
        <img src="{{ asset('images/cat.png') }}" alt="cat" class="cat">
        <div class="container">
            <h2 class="title">ABOUT US</h2>
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
    <div class="hero">
        <img src="{{ asset('images/bg2.jpg') }}" alt="bg" class="bg">
        <div class="container package">
            <h2 class="title">VALUABLE PACKAGE </h2>
            <p class="sub-title">We offer a variety of valuable packages for you to choose <br>from, perfect for pampering your beloved cats.</p>
            <div class="list-packages">
                <div class="package-item">
                    <h3>PACK A</h3>
                    <div class="price">
                        <h2>RM30</h2>
                    </div>
                    <div class="desc">
                        <ul>
                            <li>ajldnalwjdn</li>
                            <li>ajldnalwjdn</li>
                            <li>ajldnalwjdn</li>
                            <li>ajldnalwjdn</li>
                        </ul>
                    </div>
                </div>
                <div class="package-item">
                    <h3>PACK B</h3>
                    <div class="price">
                        <h2>RM40</h2>
                    </div>
                    <div class="desc">
                        <ul>
                            <li>ajldnalwjdn</li>
                            <li>ajldnalwjdn</li>
                            <li>ajldnalwjdn</li>
                            <li>ajldnalwjdn</li>
                            <li>ajldnalwjdn</li>
                        </ul>
                    </div>
                </div>
                <div class="package-item">
                    <h3>PACK C</h3>
                    <div class="price">
                        <h2>RM50</h2>
                    </div>
                    <div class="desc">
                        <ul>
                            <li>ajldnalwjdn</li>
                            <li>ajldnalwjdn</li>
                            <li>ajldnalwjdn</li>
                            <li>ajldnalwjdn</li>
                            <li>ajldnalwjdn</li>
                            <li>ajldnalwjdn</li>
                        </ul>
                    </div>
                </div>
                <div class="package-item">
                    <h3>PACK D</h3>
                    <div class="price">
                        <h2>RM80</h2>
                    </div>
                    <div class="desc">
                        <ul>
                            <li>ajldnalwjdn</li>
                            <li>ajldnalwjdn</li>
                            <li>ajldnalwjdn</li>
                            <li>ajldnalwjdn</li>
                            <li>ajldnalwjdn</li>
                            <li>ajldnalwjdn</li>
                            <li>ajldnalwjdn</li>
                            <li>ajldnalwjdn</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero">
        <img src="{{ asset('images/bg2.jpg') }}" alt="" class="bg">
        <div class="container">
            <h2 class="title">ALA CARTE</h2>
            <p class="sub-title">Not interested in a package deal ? No problem ! <br>You can pick individual items à la carte.</p>
            <div class="alacarte-items">
                <div class="service-lists">
                    <div class="card-service">
                        <img src="{{ asset('images/poop-cat.png') }}" alt="" class="service-img">
                        <div class="service-desc">
                            <p>POOP <br>CLEANING</p>
                            <div class="price">
                                <h2>RM15</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-service">
                        <img src="{{ asset('images/area-cleaning.png') }}" alt="" class="service-img">
                        <div class="service-desc">
                            <p>AREA <br>CLEANING</p>
                            <div class="price">
                                <h2>RM5</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-service">
                        <img src="{{ asset('images/feeding.png') }}" alt="" class="service-img">
                        <div class="service-desc">
                            <p>FEEDING</p>
                            <div class="price">
                                <h2>RM5</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-service">
                        <img src="{{ asset('images/pampering.png') }}" alt="" class="service-img">
                        <div class="service-desc">
                            <p>PAMPERING</p>
                            <div class="price">
                                <h2>RM5</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-service">
                        <img src="{{ asset('images/bathing.png') }}" alt="" class="service-img">
                        <div class="service-desc">
                            <p>BATHING</p>
                            <div class="price">
                                <h2>RM5</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-service">
                        <img src="{{ asset('images/clipping nail.png') }}" alt="" class="service-img">
                        <div class="service-desc">
                            <p>CLIPPING <br>NAIL</p>
                            <div class="price">
                                <h2>RM5</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alert-notice">

                </div>
            </div>
        </div>
    </div>
@endsection