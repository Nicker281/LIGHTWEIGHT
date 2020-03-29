@extends('main')

@section('css')
    <link rel="stylesheet" href="css/home.css">
@endsection

@section('content')
    <header>
        <div class="container">
            <div class="row intro">
                <div class="col intro-logo">
                    <img src="img/Logo-white.png" alt="LighWeight logo">
                </div>
                <div class="col intro-text">
                    <h1>Dream big, Set goals</h1>
                    <p>Get LightWeight</p>
                    <a href="#scroll">
                        <h1>
                            Explore <br>
                            <i class="fas fa-angle-double-down"></i>
                        </h1>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <section id="scroll">
        <h1>store</h1>
        <p>Hier komt een introductie naar de shop, de merch</p>
    </section>
    <section style="background-color:black; color:white;">
        <h1>challenge</h1>
        <p>Hier komt een introductie naar de challenges, de community</p>
    </section>
    <section>
        <h1>get to know us</h1>
        <p>hierkomt een korte verwijzing naar de about us</p>
    </section>
@endsection