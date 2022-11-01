@extends('layouts.app')
@section('content')
<section id="hero-static" class="hero-static d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
        data-aos="zoom-out">
        <h2>Services</h2>
        <p>Et voluptate esse accusantium accusamus natus reiciendis quidem voluptates similique aut.</p>
    </div>
</section>
<!-- ======= Features Section ======= -->
<section id="features" class="features">
    <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row gy-4 d-flex">

            <li class="nav-item col-6 col-md-4 col-lg-4">
                <a class="nav-link @if(str_contains(url()->full(), 'managed-services'))active show @endif"
                    data-bs-toggle="tab" data-bs-target="#tab-1">
                    <i class="bi bi-binoculars color-cyan"></i>
                    <h4>Managed Services</h4>
                </a>
            </li><!-- End Tab 1 Nav -->

            <li class="nav-item col-6 col-md-4 col-lg-4">
                <a class="nav-link @if(str_contains(url()->full(), 'implementation-services'))active show @endif"
                    data-bs-toggle="tab" data-bs-target="#tab-2">
                    <i class="bi bi-box-seam color-indigo"></i>
                    <h4>Implementation Services</h4>
                </a>
            </li><!-- End Tab 2 Nav -->

            <li class="nav-item col-6 col-md-4 col-lg-4">
                <a class="nav-link @if(str_contains(url()->full(), 'consulting-services'))active show @endif"
                    data-bs-toggle="tab" data-bs-target="#tab-3">
                    <i class="bi bi-brightness-high color-teal"></i>
                    <h4>Consulting Services</h4>
                </a>
            </li><!-- End Tab 3 Nav -->


        </ul>

        <div class="tab-content">

            <div class="tab-pane @if(str_contains(url()->full(), 'managed-services'))active show @endif" id="tab-1">
                <div class="row gy-4">
                    <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                        <h3>Managed Services</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit
                                in voluptate velit.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                            non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                    </div>
                    <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset('img/features-1.svg') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div><!-- End Tab Content 1 -->

            <div class="tab-pane @if(str_contains(url()->full(), 'implementation-services'))active show @endif"
                id="tab-2">
                <div class="row gy-4">
                    <div class="col-lg-8 order-2 order-lg-1">
                        <h3>Implementation Services</h3>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                            non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit
                                in voluptate velit.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Provident mollitia neque rerum
                                asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                                storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 order-1 order-lg-2 text-center">
                        <img src="{{ asset('img/features-2.svg') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div><!-- End Tab Content 2 -->

            <div class="tab-pane @if(str_contains(url()->full(), 'consulting-services'))active show @endif" id="tab-3">
                <div class="row gy-4">
                    <div class="col-lg-8 order-2 order-lg-1">
                        <h3>Consulting Services</h3>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                            non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea
                                commodo consequat.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit
                                in voluptate velit.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Provident mollitia neque rerum
                                asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                        </ul>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                    </div>
                    <div class="col-lg-4 order-1 order-lg-2 text-center">
                        <img src="{{ asset('img/features-3.svg') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div><!-- End Tab Content 3 -->


        </div>

    </div>
</section><!-- End Features Section -->
@endsection