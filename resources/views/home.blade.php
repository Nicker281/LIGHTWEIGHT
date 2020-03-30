@extends('main')

@section('css')
    <link rel="stylesheet" href="css/home.css">
@endsection

@section('content')
    <header>
        <div class="container">
            <div class="row intro">
                <div class="col-12 col-lg-6 intro-logo">
                    <img src="img/Logo-white.png" alt="LighWeight logo">
                </div>
                <div class="col-12 col-lg-6 intro-text">
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
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni aliquam eos laboriosam ex velit, minus maxime, ut perspiciatis possimus quaerat quas ipsam, saepe explicabo nobis eveniet doloremque porro mollitia nulla!</p>
    </section>
    <section style="background-color:black; color:white;">
        <h1>challenge</h1>
        <p>Hier komt een introductie naar de challenges, de community</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni aliquam eos laboriosam ex velit, minus maxime, ut perspiciatis possimus quaerat quas ipsam, saepe explicabo nobis eveniet doloremque porro mollitia nulla!</p>
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