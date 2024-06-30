@extends('guest.layouts.master')
@section('content')
    <!-- About Start -->
    <div class="container-xxl about my-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="#"
                            data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white rounded-top p-5 mt-lg-5">
                        <p class="fs-5 fw-medium text-success">About Us</p>
                        <h1 class="display-6 mb-4">The Best Marketing Agency to Improve Your Business</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
                            diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo</p>
                        <div class="row g-5 pt-2 mb-5">
                            <div class="col-sm-6">
                                <img class="img-fluid mb-4" src="img/icon/icon-5.png" alt="">
                                <h5 class="mb-3">Managed Services</h5>
                                <span>Clita erat ipsum et lorem et sit sed stet lorem</span>
                            </div>
                            <div class="col-sm-6">
                                <img class="img-fluid mb-4" src="img/icon/icon-2.png" alt="">
                                <h5 class="mb-3">Dedicated Experts</h5>
                                <span>Clita erat ipsum et lorem et sit sed stet lorem</span>
                            </div>
                        </div>
                        <a href="" class="custom-button-design rounded py-3 px-5 animated slideInRight">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Video Modal Start -->

    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <img class="" style="height: 55px" src="{{ asset('website/logos/smidpng.png') }}" alt="">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Responsive video container -->
                    <div class="video-container">
                        <video width="320" height="240" controls>
                            <source src="{{ asset('website/videos/idcardsad.mp4') }}" type="video/mp4">

                        </video>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- bio --}}
    <!-- About 1 - Bootstrap Brain Component -->
    <section class="py-3 py-md-5">
        <div class="container">
            <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
                <div class="col-12 col-lg-6 col-xl-5 order-md-2">
                    <img class="img-fluid rounded" loading="lazy"
                        src="https://t3.ftcdn.net/jpg/02/94/62/14/360_F_294621430_9dwIpCeY1LqefWCcU23pP9i11BgzOS0N.jpg"
                        alt="About 1">
                    {{-- <img class="img-fluid rounded" loading="lazy"
                        src="https://bootstrapbrain.com/demo/components/abouts/about-1/assets/img/about-img-1.jpg"
                        alt="About 1"> --}}
                </div>
                <div class="col-12 col-lg-6 col-xl-7">
                    <div class="row justify-content-xl-center">
                        <div class="col-12 col-xl-11">
                            <h2 class="mb-3">About the OWNER</h2>
                            <p class="lead fs-4 text-secondary mb-3">We help people to build incredible brands and superior
                                products. Our perspective is to furnish outstanding captivating services.</p>
                            <p class="mb-5">We are a fast-growing company, but we have never lost sight of our core
                                values. We believe in collaboration, innovation, and customer satisfaction. We are always
                                looking for new ways to improve our products and services.</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- bio --}}



    {{-- testimonials --}}
    @include('guest.home.testimonial')
    {{-- testimonials --}}
    <!-- Video Modal End -->
@endsection
