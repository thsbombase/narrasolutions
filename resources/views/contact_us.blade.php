@extends('layouts.app')
@section('content')
<section id="hero-static" class="hero-static d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
        data-aos="zoom-out">
        <h2>Contact Us</span></h2>
        <p>Et voluptate esse accusantium accusamus natus reiciendis quidem voluptates similique aut.</p>
    </div>
</section>
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="row gy-5 gx-lg-5">

            <div class="col-lg-6">

                <div class="info">
                    <h3>Get in touch</h3>
                    <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia
                        commodi minus.</p>

                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

            </div>
            <div class="col-lg-6 map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                    frameborder="0" allowfullscreen></iframe>
            </div><!-- End Google Maps -->
        </div>

    </div>
</section><!-- End Contact Section -->

<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq">
    <div class="container-fluid" data-aos="fade-up">

        <div class="row gy-4">

            <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                <div class="content px-xl-5">
                    <h3>Frequently Asked <strong>Questions</strong></h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
                    </p>
                </div>

                <div class="accordion accordion-flush px-xl-5" id="faqlist">

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-1">
                                <i class="bi bi-question-circle question-icon"></i>
                                Non consectetur a erat nam at lectus urna duis?
                            </button>
                        </h3>
                        <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus
                                laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor
                                rhoncus dolor purus non.
                            </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-2">
                                <i class="bi bi-question-circle question-icon"></i>
                                Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?
                            </button>
                        </h3>
                        <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                Mauris ultrices eros in cursus turpis massa tincidunt dui.
                            </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-3">
                                <i class="bi bi-question-circle question-icon"></i>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?
                            </button>
                        </h3>
                        <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci.
                                Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl
                                suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis
                                convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                            </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-4">
                                <i class="bi bi-question-circle question-icon"></i>
                                Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?
                            </button>
                        </h3>
                        <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                <i class="bi bi-question-circle question-icon"></i>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id
                                interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus
                                scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
                                Mauris ultrices eros in cursus turpis massa tincidunt dui.
                            </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-5">
                                <i class="bi bi-question-circle question-icon"></i>
                                Tempus quam pellentesque nec nam aliquam sem et tortor consequat?
                            </button>
                        </h3>
                        <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim
                                suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan.
                                Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit
                                turpis cursus in
                            </div>
                        </div>
                    </div><!-- # Faq item-->

                </div>

            </div>

            <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("{{ asset('
                img/faq.jpg')}}");'>&nbsp;</div>
        </div>

    </div>
</section><!-- End F.A.Q Section -->

@endsection