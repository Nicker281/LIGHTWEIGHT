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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores praesentium nam labore officiis, blanditiis! Omnis tempora distinctio architecto hic, a beatae quas necessitatibus asperiores perferendis nemo dolorem, velit iusto. Eius.</p>
                </div>
                <div class="col-12 col-md-6  align-self-center">
                    <img src="{{ asset('/img/challenge1.png') }}" alt="Alphabet challenge" width="100%">
                </div>
            </div>
        </div>
    </header>
@endsection