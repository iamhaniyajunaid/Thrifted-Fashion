@extends('layouts.user-layout')
@section('content')
<div class="container-fluid px-0 pt-5 ">
    <div class="row contact-img">
        <div class="contact-content">
            <div class="get-touch">
                <span></span>
                <p>Get in touch</p>
                <span></span>
            </div>
            <h1>Contact US</h1>
            <p>We'd love to hear from you. Whether you have a question, <br>
                feedback or just want to say hello — we're here for you.</p>
        </div>
    </div>
</div>
<div class="container pb-5">
    <div class="row">
        <div class="col-6 contact-info">
           
                <h5 class="badge ms-0">──── CONTACT INFORMATION</h4>
            

            <h2>Let's Get in Touch</h2>
            <p>Feel free to reach out to us throgh any of the following channels. <br>We'll get back to you as soon as
                posible</p>
            <div class="icon-container mt-5">
                <div class="icon-box d-flex">
                    <div class="icon">
                        <i class="fa fa-location-dot"></i>
                    </div>
                    <p class="ms-4"> <STRONG>OUR ADDRESS</STRONG> <br>
                        143 fashion street, Gulberg Karachi , Pakistan</p>
                </div>
                <div class="icon-box d-flex">
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <p class="ms-4"> <STRONG>EMAIL US</STRONG> <br>
                        Thirftedfashion@gmail.com</p>
                </div>
                <div class="icon-box d-flex">
                    <div class="icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <p class="ms-4"> <STRONG>CALL US</STRONG> <br>
                        +92-3313794793</p>
                </div>
                <div class="icon-box d-flex">
                    <div class="icon">
                        <i class="fa fa-clock"></i>
                    </div>
                    <p class="ms-4 "> <STRONG>WORKING HOURS</STRONG> <br>
                        Monday-Saturday <br>9:00 AM - 6:00 PM</p>
                </div>
            </div>
        </div>
        <div class="col-6 contact-form mt-5 px-5">
            <h2> Send Us a Message</h1>
                <p>Fill out the form below and we'll get back to you shortly</p>
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="text" class="form-label">Full Name</label>
                        <input type="name" class="form-control" id="inputEmail4" placeholder="Enter your full name">
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputemail" placeholder="Enter your email">
                    </div>

                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Subject">
                    </div>
                    <div class="col-12">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5"
                            placeholder="Write your message here..."></textarea>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary w-full h-full"><i class="fa-regular fa-message"></i>Send Message</button>
                    </div>
                </form>
        </div>
    </div>
</div>
@endsection