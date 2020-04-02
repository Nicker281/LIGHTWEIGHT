@extends('main')

@section('title', 'Store | ')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/shopmen.css') }}">
@endsection

@section('content')
    <header>
        <div class="container">
            <div class="row banner">
                <div class="col">
                    <a href="#shop" class="banner-link">
                        <h1 class="banner-small">
                            Explore Products<br>
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
                <div class="col">
                    <h1>Shop for men under construction</h1>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="js/scroll.js"></script>
@endsection