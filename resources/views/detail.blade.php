@extends('main')

@section('title', 'Shop Detail | ')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}">
@endsection

@section('content')
    <section id="shop">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Detail page {{ $id }}</h1>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('js/scroll.js') }}"></script>
@endsection