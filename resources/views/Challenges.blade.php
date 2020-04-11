@extends('main')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/challenges.css') }}">
@endsection

@section('content')
    <header>
        <div class="container">
            <div class="row banner">
                <div class="col-12 col-md-6 align-self-center">
                    <h1>Newest Challenge</h1>
                    <p>Our latest challenge is the death by alphabet challenge! This means you have to perform the following workout according to your own name. Succes!.</p>
                </div>
                <div class="col-12 col-md-6  align-self-center">
                    <img src="{{ asset('/img/challenge1.png') }}" alt="Alphabet challenge" width="100%">
                </div>
            </div>
        </div>
    </header>
@endsection
