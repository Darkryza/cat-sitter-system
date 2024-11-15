@extends('include.layout')
@section('content')
    <nav>
        <a href="#"><img src="{{ asset('images/LOGO-removebg-preview.png') }}" alt="logo" class="logo"></a>
        <ul class="sidebar">
            <li><a href="#team">Our Team</a></li>
            <li><a href="#contact">Contact Us</a></li>
        </ul>
        <ul class="navbar-list">
            <li><a href="#about">About</a></li>
            <li><a href="#package">Package</a></li>
            <li><a href="#ala-carte">Ala Carte</a></li>
            <li id="moreButton" onclick="showSidebar(event)"><a href="#">More</a></li>
        </ul>
    </nav>
    <div class="hero">
        <img src="{{ asset('images/bg1.jpg') }}" alt="bg" class="bg">
        <div class="welcome-title">
            <h1 class="welcome-title">WELCOME TO <br> CAT SITTER</h1>
        </div>
    </div>
    <div class="hero" id="about">
        <img src="{{ asset('images/bg2.jpg') }}" alt="" class="bg">
        <div class="container">
            <h2 class="title">ABOUT US</h2>
            <div class="about-us-text">
                <img src="{{ asset('images/cat.png') }}" alt="cat" class="cat">
                <h2>Welcome to  <span> CAT SITTER !</span></h2>
                <p>
                    .We understand that your cats are more than just pets – they’re family. That’s why we offer a dedicated in-home cat-sitting service that provides peace of mind when you can’t be there. Whether you’re traveling, busy at work, or simply need a helping hand, we’re here to make sure your feline friends are well taken care of in the comfort of their own home. <br><br>
                    Our approach is simple: provide loving, reliable, and personalized care tailored to each cat’s unique personality and needs. From feeding and playtime to administering medication or simply providing comforting company, we treat every cat with the same attention and affection we would give our own. <br><br>
                    Let us help you keep your cats happy, healthy, and stress-free while you’re away. Because when it comes to your cats, they deserve nothing but the best.
                </p>
            </div>
        </div>
    </div>
    <div class="hero" id="package">
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
                    <ul>
                        <li>ajldnalwjdn</li>
                        <li>ajldnalwjdn</li>
                        <li>ajldnalwjdn</li>
                        <li>ajldnalwjdn</li>
                    </ul>
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
    <div class="hero" id='ala-carte'>
        <img src="{{ asset('images/bg2.jpg') }}" alt="" class="bg">
        <div class="main">
            <div class="container">
                <div class="ala-carte-title">
                    <h2 class="title">Ala Carte</h2>
                    <p class="sub-title">
                        Not interested in a package deal ? No problem ! You can pick individual items à la carte.
                    </p>
                </div>
                <div class="ala-carte-items">
                    <div class="left">
                        <div class="services">
                            <div class="service-card">
                                <img src="{{ asset("images/poop-cat.png") }}" alt="">
                                <div class="info">
                                    <p class="title">Poop cleaning</p>
                                    <p class="price">RM15</p>
                                </div>
                            </div>
                            <div class="service-card">
                                <img src="{{ asset("images/area-cleaning.png") }}" alt="">
                                <div class="info">
                                    <p class="title">Area cleaning</p>
                                    <p class="price">RM5</p>
                                </div>
                            </div>
                            <div class="service-card">
                                <img src="{{ asset("images/feeding.png") }}" alt="">
                                <div class="info">
                                    <p class="title">Feeding</p>
                                    <p class="price">RM5</p>
                                </div>
                            </div>
                            <div class="service-card">
                                <img src="{{ asset("images/pampering.png") }}" alt="">
                                <div class="info">
                                    <p class="title">Pampering</p>
                                    <p class="price">RM5</p>
                                </div>
                            </div>
                            <div class="service-card">
                                <img src="{{ asset("images/bathing.png") }}" alt="">
                                <div class="info">
                                    <p class="title">Bathing</p>
                                    <p class="price">RM5</p>
                                </div>
                            </div>
                            <div class="service-card">
                                <img src="{{ asset("images/clipping nail.png") }}" alt="">
                                <div class="info">
                                    <p class="title">Clipping nail</p>
                                    <p class="price">RM5</p>
                                </div>
                            </div>
                        </div>
                        </div>
                        
                    <div class="right">
                        <img src="{{ asset("images/big-cat.png") }}">
                        <p class="big-cat-text"><span>ALERT !!</span><br>Price for 1 pax only</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero" id='team'>
        <img src="{{ asset('images/bg2.jpg') }}" alt="" class="bg">
        <div class="main">
            <div class="container">
                <div class="team-title">
                    <h2 class="title">MEET THE TEAM</h2>
                </div>
                <div class="team-container">
                    <div class="team-card">
                        <h3 class="card-title">Owner</h3>
                        <p>
                            Hi there! I’m Nisa, and I’ve been passionate about cats for as long as I can remember. With 3 years of experience, I’ve made it my mission to provide personalized care that makes every cat feel safe, happy, and loved. When you can’t be there, I’m here to make sure your feline family members are in the best hands.
                        </p>
                    </div>
                    <img src="{{ asset('images/team.png') }}" alt="">  
                    <div class="team-card">
                        <h3 class="card-title">ASSISTANT</h3>
                        <p>
                            Hi, I’m Fakhrul, her partner in crime a.k.a her beloved husband. I’m a lifelong animal lover with a special place in my heart for cats. I love creating a calm and playful environment for every kitty I meet. My goal is to make sure your cat feels comfortable and cared for while you're away.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hero" id='contact'>
        <img src="{{ asset('images/bg2.jpg') }}" alt="" class="bg">
        <div class="main">
            <div class="container">
                <div class="contact-title">
                    <h2 class="title">CONTACT US</h2>
                </div>
                <div class="contact-container">
                    <div class="contact-item">
                        <img src="{{ asset('images/whatsapp.png') }}" alt="">
                        <div class="contact-text">
                            <h3 class="contact-title">WHATSAPP</h3>
                            <p>011-37719123</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-text">
                            <h3 class="contact-title">TIKTOK</h3>
                            <p>@catsitterkl</p>
                        </div>
                        <img src="{{ asset('images/tiktok.png') }}" alt="">
                    </div>
                    <div class="contact-item">
                        <img src="{{ asset('images/facebook.png') }}" alt="">
                        <div class="contact-text">
                            <h3 class="contact-title">FACEBOOK</h3>
                            <p>@catsitterkl</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-text">
                            <h3 class="contact-title">INSTAGRAM</h3>
                            <p>@catsitterkl</p>
                        </div>
                        <img src="{{ asset('images/instagram.png') }}" alt="">
                    </div>
                    <img src="{{ asset('images/contact-cat.png') }}" alt="" class="contact-cat">
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <p>&copy; 2024 Cat Sitter. All rights reserved.</p>
        </div>
    </footer>
@endsection