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
                        <div class="form-group">
                            <label for="INname">Name</label>
                            <input type="text" class="form-control" id="INname" placeholder="Mr. LightWeight">
                        </div>
                        <div class="form-group">
                            <label for="INmail">Email address</label>
                            <input type="email" class="form-control" id="INmail" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="INsubject">Subject</label>
                            <select id="INsubject" class="form-control">
                                <option selected>- Choose a subject -</option>
                                <option>Clothing</option>
                                <option>Trainings</option>
                                <option>Business</option>
                                <option>Media</option>
                                <option>Others</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="INmessage">Message</label>
                            <textarea class="form-control" id="INmessage" rows="5" placeholder="Message: Just Do It"></textarea>
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