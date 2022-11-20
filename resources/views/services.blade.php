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
                    data-bs-target="#tab-1" href="{{ route('services', 'managed-services') }}">
                    <i class="bi bi-binoculars color-cyan"></i>
                    <h4>Managed Services</h4>
                </a>
            </li><!-- End Tab 1 Nav -->

            <li class="nav-item col-6 col-md-4 col-lg-4">
                <a class="nav-link @if(str_contains(url()->full(), 'implementation-services'))active show @endif"
                    data-bs-target="#tab-2" href="{{ route('services', 'implementation-services') }}">
                    <i class="bi bi-box-seam color-indigo"></i>
                    <h4>Implementation Services</h4>
                </a>
            </li><!-- End Tab 2 Nav -->

            <li class="nav-item col-6 col-md-4 col-lg-4">
                <a class="nav-link @if(str_contains(url()->full(), 'consulting-services'))active show @endif"
                    data-bs-target="#tab-3" href="{{ route('services', 'consulting-services') }}">
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
                        <p>
                            We understand that a good working system doesn’t just start and end at implementation.
                            There’s plenty that needs to be done afterwards – management included. To ensure your new
                            system works seamlessly, we offer expert <span class="fw-bold">management services</span>
                            which includes operation,
                            tracking, and reporting. This can be bundled with our implementation services.
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
                            Narra One provides top-of-the-line implementation services in order to advance the IT
                            infrastructure of utility companies around the globe. <br><br>

                            Narra believes in accessible software systems. Everything from Customer Care & Billing
                            (CC&B) to Meter Data Management (MDM) should be headache-free and straightforward.<br><br>

                            All of that can start with us.<br><br>

                            What we do is: we study your current system, examine the framework for any lapses, and
                            propose a solution to address the issues. Then, we brainstorm, create, set up, and implement
                            a solution. In other words, we’ll do the heavy lifting for you.<br><br>

                            Together, we’ll work to forge a solid partnership that drives growth for your system,
                            capitalizing on the functionality of Oracle products.
                        </p>

                        <h4>
                            Categories of implementation services:
                        </h4>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> Oracle Customer Care & Billing (CC&B)</li>
                            <li><i class="bi bi-check-circle-fill"></i> Oracle Meter Data Management (MDM)</li>
                            <li><i class="bi bi-check-circle-fill"></i>Oracle Customer Cloud Service (CCS)</li>
                            <li><i class="bi bi-check-circle-fill"></i>Oracle Cash-To-Meter (C2M)</li>
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