@extends('layouts.app')
@section('content')
<main id="main">
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero carousel  carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
            <div class="container">
                <div class="row justify-content-center gy-6">

                    <div class="col-lg-5 col-md-8 text-center">
                        <img src="{{ asset('img/Icon.png')}}" alt="" class="img-fluid img" width="185">
                    </div>

                    <div class="col-lg-9 text-center">
                        <h2>Welcome to Narra One Solutions</h2>
                    </div>

                </div>
            </div>
        </div><!-- End Carousel Item -->
        <div class="carousel-item ">
            <div class="container">
                <div class="row justify-content-center gy-6">

                    <div class="col-lg-5 col-md-8 text-center">
                        <img src="{{ asset('img/Progressive.png')}}" alt="" class="img-fluid img" width="200">
                    </div>

                    <div class="col-lg-9 text-center">
                        <h2>Your Progressive</h2>

                    </div>

                </div>
            </div>
        </div><!-- End Carousel Item -->
        <div class="carousel-item ">
            <div class="container">
                <div class="row justify-content-center gy-6">

                    <div class="col-lg-5 col-md-8 text-center">
                        <img src="{{ asset('img/Global partners.png')}}" alt="" class="img-fluid img" width="200">
                    </div>

                    <div class="col-lg-9 text-center">
                        <h2>Global Partners</h2>

                    </div>

                </div>
            </div>
        </div><!-- End Carousel Item -->

        <div class="carousel-item ">
            <div class="container">
                <div class="row justify-content-center gy-6 ">

                    <div class="col-lg-5 col-md-8 text-center">
                        <img src="{{ asset('img/Utility solutions.png')}}" alt="" class="img-fluid img" width="200">
                    </div>

                    <div class="col-lg-9 text-center">
                        <h2>Utility Solutions</h2>

                    </div>

                </div>
            </div>
        </div><!-- End Carousel Item -->

        <a class="carousel-control-prev" href="#hero" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

    </section><!-- End Hero Section -->
    <!-- ======= Featured Services Section ======= -->
    <section>
        <div class="container text-center fs-4">
            <p>Forming strong, long-lasting relationships through Narra One Solutions, we are your progressive, go-to
                Global IT solutions provider.</p>
            <p>Narra Solutions One is the rising SME Filipino IT Oracle Solutions Provider for businesses in the
                utilities sector. We offer systems implementation and management services catering to the needs of
                water, electricity, oil, and gas companies around the world.</p>
        </div>
    </section>
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="zoom-out">

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('img/clients/greater.svg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide"><img src="{{ asset('img/clients/bord.png')}}" class="img-fluid" alt="">
                    </div>
                    <div class="swiper-slide">
                    </div>
                </div>
            </div>
        </div>

        </div>
    </section><!-- End Clients Section -->
    <section id="featured-services" class="featured-services">
        <div class="section-header">
            <h2>Why Narra One Solutions?
            </h2>
        </div>
        <div class="container">

            <div class="row gy-4">

                <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
                    <div class="service-item position-relative">
                        <div class="icon"> <img src="{{ asset('img/Dependable.png')}}" class="img-fluid" alt=""
                                width="80">
                        </div>
                        <h4>Dependable</h4>
                        <p>We believe in accountability, transparency, and consistency. At Narra One - you won’t have to
                            worry if
                            we walk the talk, because we run. </p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon"><img src="{{ asset('img/Growth.png')}}" class="img-fluid" alt="" width="80">
                        </div>
                        <h4>Growth</h4>
                        <p>Whether it is for our clients, our company, or our employees - growth is our top priority. We
                            will
                            provide the necessary tools to help you achieve this with us. </p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon"><img src="{{ asset('img/Professional.png')}}" class="img-fluid" alt=""
                                width="80">
                        </div>
                        <h4>Professional</h4>
                        <p>Our team consists of young, talented, and passionate professionals with extensive IT
                            solutions
                            experience. </p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
                    <div class="service-item position-relative">
                        <div class="icon"><img src="{{ asset('img/Relationships.png')}}" class="img-fluid" alt=""
                                width="80">
                        </div>
                        <h4>Relationships</h4>
                        <p>We continue to nurture long lasting partnerships with our clients through our innovative
                            services and
                            extensive network.</p>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>
    </section><!-- End Featured Services Section -->



    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-header mb-3">
                <h2>Our Services</h2>
                <p></p>
            </div>
            <br>

            <div class="row gy-5 mt-2">

                <div class="col-xl-6 col-md-6 " data-aos="zoom-in" data-aos-delay="300">
                    <div class="service-item">
                        <!-- <div class="img">
                <img src="{{ asset('img/hero-bg.webp')}}" class="img-fluid" alt="">
              </div> -->
                        <div class="details position-relative">

                            <img src="{{ asset('img/Customer cloud service.png')}}" class="img-fluid" alt="" width="80">

                            <a href="{{ route('services', 'implementation-services') }}" class="stretched-link">
                                <h3>Implementation Services</h3>
                            </a>
                            <p>Narra One provides top-of-the-line implementation services in order to advance the IT
                                infrastructure of utility companies around the globe.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-6 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="service-item">
                        <div class="img">
                            <!-- <img src="{{ asset('img/hero-bg.webp')}}" class="img-fluid" alt=""> -->
                        </div>
                        <div class="details position-relative">

                            <img src="{{ asset('img/Meter data management.png')}}" class="img-fluid" alt="" width="80">

                            <a href="{{ route('services', 'managed-services') }}" class="stretched-link">
                                <h3>Managed Services</h3>
                            </a>
                            <p>We understand that a good working system doesn’t just start and end at implementation.
                                There’s plenty that needs to be done afterwards – management included. To ensure your
                                new
                                system works seamlessly, we offer expert management services which includes operation,
                                tracking, and reporting. This can be bundled with our implementation services.
                            </p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>
    </section><!-- End Services Section -->

    {{--
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">

            <div class="testimonials-slider swiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Saul Goodman</h3>
                            <h4>Ceo &amp; Founder</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                rhoncus.
                                Accusantium
                                quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Sara Wilsson</h3>
                            <h4>Designer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                cillum
                                eram malis
                                quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>Jena Karlis</h3>
                            <h4>Store Owner</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                                duis
                                minim
                                tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Matt Brandon</h3>
                            <h4>Freelancer</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                                minim
                                velit
                                minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
                                veniam.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>John Larson</h3>
                            <h4>Entrepreneur</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                veniam
                                enim culpa
                                labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi
                                cillum
                                quid.
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section --> --}}

</main><!-- End #main -->
@endsection