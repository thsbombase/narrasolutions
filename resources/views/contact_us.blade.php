@extends('layouts.app')
@section('content')
<section id="hero-static" class="hero-static d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
        data-aos="zoom-out">
        <h2>Contact Us</span></h2>
    </div>
</section>
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="row gy-5 gx-lg-5">

            <div class="col-lg-6">

                <div class="info">
                    <h3>Get in touch</h3>
                    <p></p>

                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Location:</h4>
                            <p>21st Floor, 8 Rockwell Plaza Dr, Makati, 1200 Metro Manila</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Email:</h4>
                            <p>contact@narra.one</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Call:</h4>
                            <p>+63 9950446484</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

            </div>
            <div class="col-lg-6 map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.6264701235405!2d121.03455301427952!3d14.563340481894388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c855aeb2eb17%3A0xc1c013528e591b7!2s8%20Rockwell%2C%2021%2FF%20Plaza%20Dr%2C%20Makati%2C%201200%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1669881568504!5m2!1sen!2sph"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                    </p>
                </div>

                <div class="accordion accordion-flush px-xl-5" id="faqlist">

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-1">
                                <i class="bi bi-question-circle question-icon"></i>
                                Do you only cater to power and water utilities?
                            </button>
                        </h3>
                        <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                No, we also conduct business with other utility companies, including oil, gas, etc.

                            </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-2">
                                <i class="bi bi-question-circle question-icon"></i>
                                Do you cater to non-utility companies?
                            </button>
                        </h3>
                        <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                As of now, we want to focus solely on utility companies.

                            </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-3">
                                <i class="bi bi-question-circle question-icon"></i>
                                Are non-Filipinos welcome to apply?
                            </button>
                        </h3>
                        <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                Definitely. Although our team is mainly made up of Filipinos, we are open to hiring
                                people from all backgrounds and nationalities.
                            </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-4">
                                <i class="bi bi-question-circle question-icon"></i>
                                How long does a contract or project last?

                            </button>
                        </h3>
                        <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                <i class="bi bi-question-circle question-icon"></i>
                                A contract or project lasts around 6 months, but this could change depending on the
                                scope of the project.
                            </div>
                        </div>
                    </div><!-- # Faq item-->

                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-5">
                                <i class="bi bi-question-circle question-icon"></i>
                                Do you focus on Oracle products only?
                            </button>
                        </h3>
                        <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                Yes. As of the moment, Oracle products are our main focus.
                            </div>
                        </div>
                    </div><!-- # Faq item-->
                    <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                        <h3 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-content-5">
                                <i class="bi bi-question-circle question-icon"></i>
                                How much do your services usually cost?
                            </button>
                        </h3>
                        <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                            <div class="accordion-body">
                                You may contact us via email or our contact number so we can discuss further.

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