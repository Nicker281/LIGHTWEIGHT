@extends('main')

@section('title', 'Contact | ')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
    <header>
        <div class="container">
            <div class="row banner bgForm">
                <div class="col-12 col-md-8 col-lg">
                    <form action="/contact" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Mr. LightWeight" required>
                        </div>
                        <div class="form-group">
                            <label for="mail">Email address</label>
                            <input type="email" class="form-control" id="mail" name="email" placeholder="name@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <select id="subject" name="subject" class="form-control" required>
                                <option disabled selected value="other">- Choose a subject -</option>
                                <option value="order">Order</option>
                                <option value="clothing">Clothing</option>
                                <option value="training">Trainings</option>
                                <option value="business">Business</option>
                                <option value="media">Media</option>
                                <option value="other">Others</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message: Just Do It" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-12 col-md-4 col-lg banner-text order-first order-md-last">
                    <p>Contact Us</p>
                </div>
            </div>
        </div>
    </header>
@endsection