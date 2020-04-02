@extends('main')

@section('title', 'Store | ')

@section('css')
    <link rel="stylesheet" href="css/shop.css">
@endsection

@section('content')
    <header>
        <div class="container">
            <div class="row banner">
                <div class="col">
                    <a class="btn btn-secondary" href="/shop">Woman</a>
                </div>
                <div class="col">
                    <a class="btn btn-secondary" href="/shop">Men</a>
                </div>
            </div>
        </div>
    </header>
@endsection