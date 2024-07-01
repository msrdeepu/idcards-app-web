    <!-- Topbar Start -->
    <div class="container-fluid  text-white d-none d-lg-flex">
        <div class="container py-3">
            <div class="d-flex align-items-center">
                <a href="index.html">
                    <img style="height: 55px" src="{{ asset('website/logos/smidpng.png') }}" alt="">
                </a>
                <div class="ms-auto d-flex align-items-center">
                    <small class="ms-4 text-dark"><i class="fa fa-map-marker-alt me-3"></i>R.R Street, Nellore, AP,
                        India</small>
                    {{-- <small class="ms-4 text-dark"><i class="fa fa-envelope me-3"></i>info@example.com</small> --}}
                    <small class="ms-4 text-dark"><i class="fa fa-phone-alt me-3"></i>+91-9885594577</small>
                    <div class="ms-3 d-flex">
                        <a class="btn btn-sm-square btn-light text-success rounded-circle ms-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-light text-success rounded-circle ms-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-light text-success rounded-circle ms-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top topbar">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-lg-0 ">
                <a href="index.html" class="navbar-brand d-lg-none">
                    <img class="" style="height: 55px" src="{{ asset('website/logos/smidpng.png') }}"
                        alt="">
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ">

                        <a href="{{ route('main.home') }}" class="nav-item nav-link">Home</a>
                        <a href="{{ route('main.services') }}" class="nav-item nav-link">Services</a>
                        <a href="{{ route('main.gallery') }}" class="nav-item nav-link">Gallery</a>
                        <a href="{{ route('main.about') }}" class="nav-item nav-link">About</a>
                        <a href="{{ route('contact.newcontact') }}" class="nav-item nav-link">Contact</a>
                        {{-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="feature.html" class="dropdown-item">Features</a>
                                <a href="team.html" class="dropdown-item">Our Team</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="quote.html" class="dropdown-item">Quotation</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div> --}}


                    </div>
                    <div class="ms-auto d-none d-lg-block">
                        <a href="" class="btn bg-white rounded py-2 px-3" data-bs-toggle="modal"
                            data-bs-target="#videoModal"><i class="fa fas fa-video text-success"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <!-- Navbar End -->
