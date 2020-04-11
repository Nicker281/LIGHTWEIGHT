@extends('main')

@section('title', 'Shop Detail | ')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
    <section id="shop">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>{{ $name }}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <img src="{{ $img }}" alt="{{ $name }}" width="100%">
                </div>
                <div class="col-6">
                    <h1>
                        @foreach($sizes as $size)
                        {{ $size }} | 
                        @endforeach
                    </h1>
                    <h1>
                        @foreach($colors as $color)
                        {{ $color }} | 
                        @endforeach
                    </h1>
                    <h1>buy</h1>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('js/scroll.js') }}"></script>
@endsection