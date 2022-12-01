@extends('layouts.app')
@section('content')
<section id="hero-static" class="hero-static d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
        data-aos="zoom-out">
        <h2>Services</h2>
    </div>
</section>
<!-- ======= Features Section ======= -->
<section id="features" class="features">
    <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row gy-4 d-flex">
            <li class="nav-item col-12 col-md-6 col-lg-6">
                <a class="nav-link @if(str_contains(url()->full(), 'implementation-services'))active show @endif"
                    data-bs-target="#tab-2" href="{{ route('services', 'implementation-services') }}">
                    <img src="{{ asset('img/Customer cloud service.png')}}" class="img-fluid" alt="" width="80">
                    <h4>Implementation Services</h4>
                </a>
            </li><!-- End Tab 2 Nav -->
            <li class="nav-item col-12 col-md-6 col-lg-6">
                <a class="nav-link @if(str_contains(url()->full(), 'managed-services'))active show @endif"
                    data-bs-target="#tab-1" href="{{ route('services', 'managed-services') }}">
                    <img src="{{ asset('img/Meter data management.png')}}" class="img-fluid" alt="" width="80">
                    <h4>Managed Services</h4>
                </a>
            </li><!-- End Tab 1 Nav -->
        </ul>

        <div class="tab-content">
            <div class="tab-pane @if(str_contains(url()->full(), 'implementation-services'))active show @endif"
                id="tab-2">
                <div class="row gy-4">
                    <div class="col-lg-12">
                        <h3>Implementation Services</h3>
                        <p>
                            Narra One provides top-of-the-line implementation services in advancing the IT
                            infrastructure of utility companies around the globe. <br><br>

                            Narra believes in accessible software systems. We strive to provide convenient and
                            straightforward Customer Care & Billing (CC&B) to Meter Data Management (MDM) services. All
                            of these systems can start with us, easy and hassle-free.
                        </p>
                        <h4>
                            What We Do?
                        </h4>
                        <p>We study your existing systems, examine the framework for any lapses, and propose a solution
                            to address these issues. Then, we brainstorm, create, set-up, and implement a solution. In
                            other words - we’ll do the heavy lifting for you. <br><br>

                            Together, we’ll work to forge a solid partnership that drives growth for your system,
                            capitalizing on the functionality of Oracle products.
                        </p>
                        <h4>Narra One Process</h4>
                        <p>
                            We strive to be unlike any other IT company you’ve worked with. <br><br>

                            Our team builds a detailed design and configuration with the inputs of our clients. Once
                            this is ironed out, we proceed to test runs and data migration. Then we test it again, this
                            time right before deployment, making sure no issues take place before we finally <b>go
                                live</b>. <br><br>

                            But the process doesn’t end here.<br><br>

                            It is inevitable to experience post-deployment mishaps as they’re a natural part of
                            implementing a new system. At Narra One, we offer <b>Hypercare/Support</b> services after
                            deployment, helping you with all the fine-tuning necessary.<br><br>

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
                </div>
            </div><!-- End Tab Content 2 -->
            <div class="tab-pane @if(str_contains(url()->full(), 'managed-services'))active show @endif" id="tab-1">
                <div class="row gy-4">
                    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                        <h3>Managed Services</h3>
                        <p>
                            We understand that a good working system doesn’t just start and end at the implementation
                            phase. To ensure your new system works seamlessly, we also offer expert <b> management
                                services</b>
                            which includes <b>operation, tracking, and reporting</b> . This can be bundled with our
                            implementation services.
                    </div>
                </div>
            </div><!-- End Tab Content 1 -->



        </div>

    </div>
</section><!-- End Features Section -->
@endsection