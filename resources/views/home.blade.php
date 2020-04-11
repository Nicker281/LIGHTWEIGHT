@extends('main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
    <header>
        <div class="container">
            <div class="row banner">
                <div class="col-12 col-lg-6 banner-logo">
                    <div class="LOGO">
                        <img src="{{ asset('img/LWvertical.png') }}" alt="lwLOGO";>
                        <img src="{{ asset('img/grad.png') }}" class="img-top" alt="lwLOGOgrad";>
                    </div>
                </div>
                <div class="col-12 col-lg-6 banner-text">
                    <h1 class="banner-small">Dream big, Set goals</h1>
                    <p>Get Lightweight</p>
                    <a href="#shop" class="banner-link">
                        <h1 class="banner-small">
                            Explore <br>
                            <i class="fas fa-angle-double-down"></i>
                        </h1>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <section id="shop">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4"></div>
                <div class="bgWhite col">
                    <h1 class="text-center">Visit our shop</h1>
                    <p class="text-center">This goes to our shop. We are partnered with a well known print company to ensure the best quality in prints aswell as clothing. The packaging materials are either recyclable or biodegradable. Bubble wraps are made from a minimum of 15% recycled plastic and 10% post-consumer content. The kraft tubes are made from 70-100% post-consumer recycled content and 0-30% secondary recycled content. So you can have your mind at ease while you shop.</p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12 col-md-4"></div>
                <div class="col-12 col-md-8">
                    <div class="row">
                        <div class="justify-content-center col-12 col-md-6 col-lg-4">
                            <div class="imgC" id="imgC1"></div>
                        </div>
                        <div class="justify-content-center col-12 col-md-6 col-lg-4">
                            <div class="imgC" id="imgC2"></div>
                        </div>
                        <div class="justify-content-center col-12 col-md-12 col-lg-4">
                            <div class="imgC" id="imgC3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-12 col-md-4"></div>
                <div class="text-center col">
                    <a class="btn btn-primary" href="/shop/all">Go To Shop</a>
                </div>
            </div>
        </div>
    </section>
    <section id="challenges">
        <div class="container">
            <div class="row">
                <div class="bgBlack col">
                    <h1 class="text-center">Challenge us &amp; yourself</h1>
                    <p class="text-center">Here you will find our latest challenges. Feel free to challenge us aswell!</p>
                </div>
                <div class="col-12 col-md-4"></div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="text-center col">
                    <a class="btn btn-secondary" href="/challenges">Go To Challenges</a>
                </div>
                <div class="col-12 col-md-4"></div>
            </div>
        </div>
    </section>
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4"></div>
                <div class="bgWhite col">
                    <h1 class="text-center">Get to know us</h1>
                    <p class="text-center">We are trying to be as transparant as possible, we are all putting our heart and soul in this! So if you want to know more about us, you can read it here.</p>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-12 col-md-4"></div>
                <div class="text-center col">
                    <a class="btn btn-primary" href="/about">Go To About Us</a>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('js/scroll.js') }}"></script>
@endsection
