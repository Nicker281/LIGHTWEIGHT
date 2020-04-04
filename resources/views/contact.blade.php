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
                    <form action="">
                        @csrf
                        <div class="form-group">
                            <label for="INname">Name</label>
                            <input type="text" class="form-control" id="INname" placeholder="Mr. LightWeight" required>
                        </div>
                        <div class="form-group">
                            <label for="INmail">Email address</label>
                            <input type="email" class="form-control" id="INmail" placeholder="name@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="INsubject">Subject</label>
                            <select id="INsubject" class="form-control" required>
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
                            <label for="INmessage">Message</label>
                            <textarea class="form-control" id="INmessage" rows="5" placeholder="Message: Just Do It" required></textarea>
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