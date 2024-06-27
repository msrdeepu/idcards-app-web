@extends('guest.layouts.master')
@section('content')
    <div id="contact-page">

        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">

                    <h1 class="display-5 mb-5">Contact Us</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp order-sm-2 order-md-1" data-wow-delay="0.5s">
                        <h3 class="mb-4">Contact Details</h3>
                        <div class="d-flex border-bottom pb-3 mb-3">
                            <div class="flex-shrink-0 btn-square bg-success rounded-circle">
                                <i class="fa fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h6>Our Office</h6>
                                <span>123 Street, New York, USA</span>
                            </div>
                        </div>
                        <div class="d-flex border-bottom pb-3 mb-3">
                            <div class="flex-shrink-0 btn-square bg-success rounded-circle">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h6>Call Us</h6>
                                <span>+012 345 67890</span>
                            </div>
                        </div>
                        <div class="d-flex border-bottom-0 pb-3 mb-3">
                            <div class="flex-shrink-0 btn-square bg-success rounded-circle">
                                <i class="fa fa-envelope text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h6>Mail Us</h6>
                                <span>info@example.com</span>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-6 wow fadeInUp order-sm-1 order-md-2" data-wow-delay="0.1s">
                        <h3 class="mb-4">Get in Touch</h3>

                        <form method="POST" action="{{ route('contact.createcontact') }}">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" required name="name" class="form-control" id="name"
                                            placeholder="Your Name">
                                        <label for="name">* Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="number" required name="phone" class="form-control" id="phone"
                                            placeholder="Your Email">
                                        <label for="phone">* Your Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="subject" id="subject"
                                            placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea name="message" class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn custom-button-design-two rounded py-3 px-5" type="submit">Send
                                        Message</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
