@extends('main')

@section('title', 'Contact | ')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')


    <?php

    if(isset($_POST['submit'])){
        $to = "info@lightweight.be"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $name = $_POST['name'];
        $subject = "Form submission";
        $message = $name . " " . "\n" . $_POST['message'];

        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to,$subject,$message,$headers);
        echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
        // You can also use header('Location: thank_you.php'); to redirect to another page.

        error_reporting(-1);
        ini_set('display_errors', 'On');
        set_error_handler("var_dump");
    }
    ?>

    <header>
        <div class="container">
            <div class="row banner bgForm">
                <div class="col-12 col-md-8 col-lg">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="INname">Name</label>
                            <input type="text" class="form-control" name="name" id="INname" placeholder="Mr. LightWeight" required>
                        </div>
                        <div class="form-group">
                            <label for="INmail">Email address</label>
                            <input type="email" class="form-control" name="email" id="INmail" placeholder="name@example.com" required>
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
                            <textarea class="form-control" name="message" id="INmessage" rows="5" placeholder="Message: Just Do It" required></textarea>
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
