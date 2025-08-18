<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Aquadan Solution LTD</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Aquadan Solution LTD provides clean, safe, and quality water solutions." name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta
        content="Aquadan Solution LTD offers professional water treatment, purification, and delivery services for residential and commercial clients."
        name="description">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        .cart-count {
            font-size: 0.7rem;
            padding: 0.35em 0.45em;
        }
    </style>
</head>

<body>

    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-primary"><i class="fas fa-hand-holding-water me-3"></i>Aquadan</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">
                        Home
                    </a>

                    <a href="{{ url('/shop') }}" class="nav-item nav-link {{ Request::is('shop') ? 'active' : '' }}">
                        Shop
                    </a>

                    <a href="{{ url('/contact') }}"
                        class="nav-item nav-link {{ Request::is('contact') ? 'active' : '' }}">
                        Contact
                    </a>
                    <a href="{{ url('cart') }}"
                        class="nav-item nav-link position-relative d-flex align-items-center">
                        <i class="fa fa-shopping-cart fs-5"></i>
                        <span
                            class="position-absolute top-2 start-100 translate-middle badge rounded-pill bg-danger cart-count">
                            {{ count(session('cart', [])) }}
                        </span>
                    </a>

                </div>


                <button class="btn btn-primary btn-md-square d-flex flex-shrink-0 mb-3 mb-lg-0 rounded-circle me-3"
                    data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                <a href="" class="btn btn-primary rounded-pill d-inline-flex flex-shrink-0 py-2 px-4">Order
                    Now</a>
            </div>
        </nav>


    </div>

    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h4 class="modal-title mb-0" id="exampleModalLabel">Search Our Products</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="Search for products..."
                            aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text btn border p-3"><i
                                class="fa fa-search text-white"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('app')


    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5">
            <div class="row g-5 mb-5 align-items-center">
                <div class="col-lg-7">
                    <div class="position-relative mx-auto">
                        <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your Email Address">
                        <button type="button"
                            class="btn btn-secondary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-end">
                        <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-secondary btn-md-square rounded-circle me-3" href=""><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-secondary btn-md-square rounded-circle me-0" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-md-8 ">
                    <div class="footer-item d-flex flex-column">
                        <div class="footer-item">
                            <h3 class="text-white mb-4"><i
                                    class="fas fa-hand-holding-water text-primary me-3"></i>Aquadan Solution Ltd.</h3>
                            <p class="mb-3">Aquadan Solution LTD is dedicated to providing high-quality, safe, and
                                reliable water solutions to communities and businesses. We are committed to health and
                                sustainability.</p>
                        </div>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-white mb-4">Contact Info</h4>
                        <a href="#"><i class="fa fa-map-marker-alt me-2"></i> 123 Waterway, City, Country</a>
                        <a href="mailto:info@aquadan.com"><i class="fas fa-envelope me-2"></i> info@aquadan.com</a>
                        <a href="mailto:support@aquadan.com"><i class="fas fa-envelope me-2"></i>
                            support@aquadan.com</a>
                        <a href="tel:+1 234 567 8900"><i class="fas fa-phone me-2"></i> +1 234 567 8900</a>
                        <a href="tel:+1 234 567 8901" class="mb-3"><i class="fas fa-print me-2"></i> +1 234 567
                            8901</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-body"><a href="#" class="border-bottom text-white"><i
                                class="fas fa-copyright text-light me-2"></i>Aquadan Solution Ltd.</a>, All right
                        reserved.</span>
                </div>

            </div>
        </div>
    </div>
    <a href="#" class="btn btn-secondary btn-lg-square rounded-circle back-to-top"><i
            class="fa fa-arrow-up"></i></a>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>
