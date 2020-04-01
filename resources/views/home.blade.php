@extends('main')

@section('css')
    <link rel="stylesheet" href="css/home.css">
@endsection

@section('content')
    <header>
        <div class="container">
            <div class="row banner">
                <div class="col-12 col-lg-6 banner-logo">
                    <img src="img/Logo-white.png" alt="LighWeight logo">
                </div>
                <div class="col-12 col-lg-6 banner-text">
                    <h1 class="banner-small">Dream big, Set goals</h1>
                    <p>Get LightWeight</p>
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
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut dolorem, dicta harum delectus est aut facilis necessitatibus quasi nobis maxime deserunt voluptate nulla unde voluptatem sed cupiditate iure blanditiis soluta!</p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-12 col-md-4"></div>
                <div class="justify-content-center col-12 col-md-4 col-lg">
                    <div class="imgC" id="imgC1"></div>
                </div>
                <div class="justify-content-center col-12 col-md-4 col-lg">
                    <div class="imgC" id="imgC2"></div>
                </div>
                <div class="justify-content-center col-12 offset-0 col-md-8 offset-md-4 col-lg offset-lg-0">
                    <div class="imgC" id="imgC3"></div>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-12 col-md-4"></div>
                <div class="text-center col">
                    <a class="btn btn-primary" href="/shop">Go To Shop</a>
                </div>
            </div>
        </div>
    </section>
    <section id="challenges">
        <div class="container">
            <div class="row">
                <div class="bgBlack col">
                    <h1 class="text-center">Challenge us &amp; yourself</h1>
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut dolorem, dicta harum delectus est aut facilis necessitatibus quasi nobis maxime deserunt voluptate nulla unde voluptatem sed cupiditate iure blanditiis soluta!</p>
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
    <section>
        <h1>get to know us</h1>
        <p>hierkomt een korte verwijzing naar de about us</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni aliquam eos laboriosam ex velit, minus maxime, ut perspiciatis possimus quaerat quas ipsam, saepe explicabo nobis eveniet doloremque porro mollitia nulla!</p>
    </section>
@endsection

@section('js')
    <script>
        $('a[href*="#"]').on('click', function(e) {
            e.preventDefault()
            $('html, body').animate(
                {
                    scrollTop: $($(this).attr('href')).offset().top,
                }, 500, 'linear')
            })
    </script>
@endsection