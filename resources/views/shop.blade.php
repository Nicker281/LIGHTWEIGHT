@extends('main')

@section('title', 'Shop | ')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}">
    <style>
        header{
            background-image: url('{{ asset($style->back) }}');
            align-items: {{ $style->align }};
        }
        @media (max-width:720px){
            header{
                background-image: url('{{ asset($style->backSmall) }}');
            }
        }
    </style>
@endsection

@section('content')
    <header>
        <div class="container">
            {!! $header !!}
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
            @for($i = 0; $i < count($titles); $i++)
            <div class="row" id="{{ $scrolls[$i] }}">
                <div class="col-12">
                    <h1>{{ $titles[$i] }}</h1>
                    <hr>
                </div>
                @foreach($articles[$i] as $art)
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="/shop/{{ $art['id'] }}">
                        <img src="{{ $art['img'] }}" alt="{{ $art['name'] }}" width="90%">
                        <p>
                            {{ $art['name'] }} <br>
                            €{{ $art['price'] }}
                        </p>
                    </a>
                </div>
                @endforeach
            </div>
            @endfor
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('js/scroll.js') }}"></script>
@endsection