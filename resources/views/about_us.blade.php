@extends('layouts.app')
@section('content')

<section id="hero-static" class="hero-static d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
        data-aos="zoom-out">
        <h2>About Us</h2>
    </div>
</section>

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-12">
                <h1>Rising SME Filipino IT Oracle Solutions Provider </h1>
                <br>
                <p>
                    By forging strong, long-lasting relationships with our clients and partners, Narra One aims to be
                    the go-to utilities solutions provider for companies across the globe.
                </p>
                <p>Founded in January 2022, Narra One was created with a goal to highlight Filipino expertise in the IT
                    industry. Leveraging the experience of our founder, Jordan Fernandez, we aim to enhance the IT
                    infrastructures of water and power companies worldwide.
                </p>
                <p>To date, we’ve secured two major utility clients: Great Western Power (Melbourne, Victoria, and
                    Australia) and Bord Gais Energy Ireland. </p>

            </div>

        </div>

    </div>
</section><!-- End About Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team mt-0">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h1>Meet our CEO</h1>
        </div>

        <div class="row gy-5 justify-content-center">

            <div class="col-xl-12 col-md-12 d-flex " data-aos="zoom-in" data-aos-delay="200">

                <div class="row">
                    <div class="col-md-6 text-center text-md-end"><img src="{{ asset('img/team-1.jpg') }}"
                            class="img-fluid rounded" alt="" width="350">
                    </div>
                    <div class="col-md-6 mt-5">
                        <h4>Jordan Fernandez</h4>
                        <p>Chief Executive Officer</p>

                        <p>A technology enthusiast with more than 12 years of experience in software implementation
                            design, business analysis, and technology consulting.
                        </p>
                        <p>Leveraging his expertise in Oracle Enterprise Applications, Jordan uses technology to
                            encourage creativity and transparency in everyday life. He specializes in the Tax &
                            Utilities industries and has developed his career across different countries and under
                            different organizations, including <b>IBM Philippines</b> and the<b> National Water
                                Company</b> in
                            the
                            Kingdom of Saudi Arabia. Most of Jordan’s career was spent in Australia working as a
                            Techno-Functional Lead for a local Queensland business.</p>
                    </div>
                </div>

            </div><!-- End Team Member -->

        </div>

    </div>
</section><!-- End Team Section -->

@endsection