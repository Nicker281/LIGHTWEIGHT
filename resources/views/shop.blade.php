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
            <div class="row">
                <div class="col">
                    <h1>{{ $shop }}</h1>
                </div>
            </div>
            <div class="row">
                @foreach($articles['result'] as $art)
                <div class="col-3">
                    <a href="/shop/{{ $art['id'] }}">
                        <img src="{{ $art['thumbnail_url'] }}" alt="{{ $art['name'] }}" width="90%">
                        <p>{{ $art['name'] }}</p>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('js/scroll.js') }}"></script>
@endsection