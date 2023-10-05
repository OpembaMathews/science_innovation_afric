@extends('layouts.master')
@section('title', 'Science Innovation Africa')

@section('content')

    <section id="contact" class="contact">
        <div class="map-section pt-5">
            
            <div class="map-section pt-5">
               
                <iframe style="border:0; width: 100%; height: 350px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.3134772028576!2d36.948766!3d-0.421076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMCTCsDM4JzUwLjEiTiAzNsKwMTYnMzMuNyJF!5e0!3m2!1sen!2ske!4v1632518324165!5m2!1sen!2ske"
                    frameborder="0" allowfullscreen></iframe>
            </div>

        </div>
        <div class="container">

            <div class="row justify-content-center" data-aos="fade-up">

                <div class="col-lg-10">

                    <div class="info-wrap">
                        <div class="row">
                            <div class="col-lg-4 info">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Pamki House,RM-21<br>NYERI, 605-10100</p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>service.ke@taiwanafricaservice.org<br>opemba.m@taiwanafricaservice.org</p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+254 712 974 925<br>+254 705 165 333</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row mt-5 justify-content-center" data-aos="fade-up">
                <div class="col-lg-10">
                    <form action="{{ route('projects.sendEmail') }}" method="post" role="form" class="php-email-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"> Message not sent</div>
                            <div class="sent-message">Message sent successfully!</div>
                            
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                        </div>
                        
                        <div class="text-center">
                            <br>
                            <button type="submit" class="btn btn-primary ">Send Message</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>

        </div>
    </section>

@endsection
