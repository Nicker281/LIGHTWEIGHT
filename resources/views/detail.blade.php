@extends('main')

@section('title', 'Shop Detail | ')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img id="previewImg" src="{{ $img }}" alt="{{ $name }}" width="99.7%">
                </div>
                <div class="col-12 col-md-6">
                    <h1>{{ $name }}</h1>
                    <hr>
                    <p>
                        Available sizes: 
                        @foreach($sizes as $size)
                        {{ $size }} | 
                        @endforeach
                    </p>
                    <p>
                        @foreach($colors as $color)
                        <button class="btn btn-primary colorBtn" id="{{ $color['img'] }}">{{ $color['color'] }}</button>
                        @endforeach
                    </p>
                    <h1>€{{ $price }}</h1>
                    <p>
                        If you want to order please contact <a href="mailto:info@lightweight.be">info@lightweight.be</a> or an ambassador.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="{{ asset('js/scroll.js') }}"></script>
    <script>
        $('.colorBtn').click(function(){
            $('#previewImg').attr('src', $(this).attr('id'));
        });
    </script>
@endsection