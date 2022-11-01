@extends('layouts.app')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero carousel  carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

    <div class="carousel-item active">
        <div class="container">
            <div class="row justify-content-center gy-6">

                <div class="col-lg-5 col-md-8">
                    <img src="{{ asset('img/hero-carousel/hero-carousel-1.svg') }}" alt="" class="img-fluid img">
                </div>

                <div class="col-lg-9 text-center">
                    <h2>Welcome to Narra One Solutions</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                        aliquip
                        ex
                        ea commodo consequat.</p>
                    <a href="#featured-services" class="btn-get-started scrollto ">Get Started</a>
                </div>

            </div>
        </div>
    </div><!-- End Carousel Item -->

    <div class="carousel-item">
        <div class="container">
            <div class="row justify-content-center gy-6">

                <div class="col-lg-5 col-md-8">
                    <img src="{{ asset('img/hero-carousel/hero-carousel-2.svg') }}" alt="" class="img-fluid img">
                </div>

                <div class="col-lg-9 text-center">
                    <h2>At vero eos et accusamus</h2>
                    <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                        maxime
                        placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem
                        quibusdam
                        et aut officiis debitis aut.</p>
                    <a href="#featured-services" class="btn-get-started scrollto ">Get Started</a>
                </div>

            </div>
        </div>
    </div><!-- End Carousel Item -->

    <div class="carousel-item">
        <div class="container">
            <div class="row justify-content-center gy-6">

                <div class="col-lg-5 col-md-8">
                    <img src="{{ asset('img/hero-carousel/hero-carousel-3.svg') }}" alt="" class="img-fluid img">
                </div>

                <div class="col-lg-9 text-center">
                    <h2>Temporibus autem quibusdam</h2>
                    <p>Beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                        odit aut
                        fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt omnis iste
                        natus
                        error sit voluptatem accusantium.</p>
                    <a href="#featured-services" class="btn-get-started scrollto ">Get Started</a>
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
<section id="featured-services" class="featured-services">
    <div class="section-header">
        <h2>Why Narra One Solutions?
        </h2>
    </div>
    <div class="container">

        <div class="row gy-4">

            <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-activity icon"></i></div>
                    <h4>Lorem Ipsum</h4>
                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                    <h4>Sed ut perspici</h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                    <h4>Magni Dolores</h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                    <h4>Nemo Enim</h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                </div>
            </div><!-- End Service Item -->

        </div>

    </div>
</section><!-- End Featured Services Section -->

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">
    <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><img src="{{ asset('img/clients/client-1.png') }}" class="img-fluid" alt="">
                </div>
                <div class="swiper-slide"><img src="{{ asset('img/clients/client-2.png') }}" class="img-fluid" alt="">
                </div>
                <div class="swiper-slide"><img src="{{ asset('img/clients/client-3.png"') }} class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="{{ asset(' img/clients/client-4.png') }}" class="img-fluid" alt="">
                </div>
                <div class="swiper-slide"><img src="{{ asset('img/clients/client-5.png') }}" class="img-fluid" alt="">
                </div>
                <div class="swiper-slide"><img src="{{ asset('img/clients/client-6.png') }}" class="img-fluid" alt="">
                </div>
                <div class="swiper-slide"><img src="{{ asset('img/clients/client-7.png') }}" class="img-fluid" alt="">
                </div>
                <div class="swiper-slide"><img src="{{ asset('img/clients/client-8.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </div>
</section><!-- End Clients Section -->-->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Our Services</h2>
            <p>Ea vitae aspernatur deserunt voluptatem impedit deserunt magnam occaecati dssumenda quas ut ad dolores
                adipisci aliquam.</p>
        </div>

        <div class="row gy-5">

            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="service-item">
                    <div class="img">
                        <img src="{{ asset('/img/services-1.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-activity"></i>
                        </div>
                        <a href="services.html" class="stretched-link">
                            <h3>Managed Services</h3>
                        </a>
                        <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure
                            perferendis.</p>
                    </div>
                </div>
            </div><!-- End Service Item -->

            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="service-item">
                    <div class="img">
                        <img src="{{ asset('/img/services-2.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-broadcast"></i>
                        </div>
                        <a href="services.html" class="stretched-link">
                            <h3>Implementation Services</h3>
                        </a>
                        <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic
                            non ut
                            nesciunt dolorem.</p>
                    </div>
                </div>
            </div><!-- End Service Item -->

            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="service-item">
                    <div class="img">
                        <img src="{{ asset('/img/services-3.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-easel"></i>
                        </div>
                        <a href="services.html" class="stretched-link">
                            <h3>Consulting Services</h3>
                        </a>
                        <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas
                            adipisci
                            eos earum corrupti.</p>
                    </div>
                </div>
            </div><!-- End Service Item -->

        </div>

    </div>
</section><!-- End Services Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

        <div class="testimonials-slider swiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                        <h3>Saul Goodman</h3>
                        <h4>Ceo &amp; Founder</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                            Accusantium
                            quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum
                            eram malis
                            quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis
                            minim
                            tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim
                            velit
                            minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
                            veniam.
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <img src="{{ asset('/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                        <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i>
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam
                            enim culpa
                            labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum
                            quid.
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End testimonial item -->

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Testimonials Section -->
@endsection