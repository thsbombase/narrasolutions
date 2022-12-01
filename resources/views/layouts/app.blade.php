<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Narra One Solutions</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/Icon.png')}}" rel="icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css" rel="stylesheet') }}">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">


    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="{{ asset('css/variables.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">


    <!-- =======================================================
  * Template Name: HeroBiz - v2.3.0
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<!-- ======= Header ======= -->
@if (!Request::is('login'))
<header id="header" class="header fixed-top">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('img/logo.png') }}" alt="">

        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{ route('home') }}">Home</a></li>
                <li><a class="nav-link scrollto" href="{{ route('about-us') }}">About Us</a></li>
                <li class="dropdown"><a href="{{ route('services', 'implementation-services') }}"><span>Services</span>
                        <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                        <li><a href="{{ route('services', 'implementation-services') }}">Implementation Services</a>
                        </li>
                        <li><a href="{{ route('services' , 'managed-services') }}">Managed Services</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="{{ route('careers') }}">Careers</a></li>

                <li><a class="nav-link scrollto" href="{{ route('contact-us') }}">Contact Us</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
    </div>
</header><!-- End Header -->
@endif


<body>

    <main id="main">
        @yield('content')
    </main>
    @if (!Request::is('login'))
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>Narra One Solutions</h3>
                            <p>
                                21st Floor, 8 Rockwell Plaza Dr, <br>
                                Makati, 1200 Metro Manila<br><br>
                                <strong>Phone:</strong> +63 9950446484<br>
                                <strong>Email:</strong> contact@narra.one
                                <br>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('about-us') }}">About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('careers') }}">Careers</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ route('contact-us') }}">Contact Us</a>
                            </li>
                            {{-- <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li> --}}
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a
                                    href="{{ route('services', 'implementation-services') }}">Implementation
                                    Services</a>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <a
                                    href="{{ route('services' , 'managed-services') }}">Managed Services</a></li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-legal text-center">
            <div
                class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

                <div class="d-flex flex-column align-items-center align-items-lg-start">
                    <div class="copyright">
                        &copy; Copyright <strong><span>Narra One Solutions</span></strong>. All Rights Reserved
                    </div>
                </div>

                {{-- <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                    <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div> --}}

            </div>
        </div>

    </footer><!-- End Footer -->
    @endif
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>