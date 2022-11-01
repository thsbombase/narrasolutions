@extends('layouts.app')
@section('content')

<section id="hero-static" class="hero-static d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
        data-aos="zoom-out">
        <h2>About Us</h2>
        <p>Et voluptate esse accusantium accusamus natus reiciendis quidem voluptates similique aut.</p>
    </div>
</section>

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-5">
                <div class="about-img">
                    <img src="{{ asset('img/about.jpg') }}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-7">
                <h3 class="pt-0 pt-lg-5">Neque officiis dolore maiores et exercitationem quae est seda lidera
                    pat claero</h3>

                <!-- Tabs -->
                <ul class="nav nav-pills mb-3">
                    <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">Saepe fuga</a></li>
                    <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">Voluptates</a></li>
                    <li><a class="nav-link" data-bs-toggle="pill" href="#tab3">Corrupti</a></li>
                </ul><!-- End Tabs -->

                <!-- Tab Content -->
                <div class="tab-content">

                    <div class="tab-pane fade show active" id="tab1">

                        <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos
                            doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo
                            suscipit voluptatem.</p>

                        <div class="d-flex align-items-center mt-4">
                            <i class="bi bi-check2"></i>
                            <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                        </div>
                        <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi
                            dolorum non eveniet magni quaerat nemo et.</p>

                        <div class="d-flex align-items-center mt-4">
                            <i class="bi bi-check2"></i>
                            <h4>Incidunt non veritatis illum ea ut nisi</h4>
                        </div>
                        <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta
                            tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at.
                            Dolorem quo tempora. Quia et perferendis.</p>

                        <div class="d-flex align-items-center mt-4">
                            <i class="bi bi-check2"></i>
                            <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                        </div>
                        <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam
                            officia aut ut alias quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam
                            odit enim quaerat. Vero error error voluptatem eum.</p>

                    </div><!-- End Tab 1 Content -->

                    <div class="tab-pane fade show" id="tab2">

                        <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos
                            doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo
                            suscipit voluptatem.</p>

                        <div class="d-flex align-items-center mt-4">
                            <i class="bi bi-check2"></i>
                            <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                        </div>
                        <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi
                            dolorum non eveniet magni quaerat nemo et.</p>

                        <div class="d-flex align-items-center mt-4">
                            <i class="bi bi-check2"></i>
                            <h4>Incidunt non veritatis illum ea ut nisi</h4>
                        </div>
                        <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta
                            tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at.
                            Dolorem quo tempora. Quia et perferendis.</p>

                        <div class="d-flex align-items-center mt-4">
                            <i class="bi bi-check2"></i>
                            <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                        </div>
                        <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam
                            officia aut ut alias quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam
                            odit enim quaerat. Vero error error voluptatem eum.</p>

                    </div><!-- End Tab 2 Content -->

                    <div class="tab-pane fade show" id="tab3">

                        <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos
                            doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo
                            suscipit voluptatem.</p>

                        <div class="d-flex align-items-center mt-4">
                            <i class="bi bi-check2"></i>
                            <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                        </div>
                        <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi
                            dolorum non eveniet magni quaerat nemo et.</p>

                        <div class="d-flex align-items-center mt-4">
                            <i class="bi bi-check2"></i>
                            <h4>Incidunt non veritatis illum ea ut nisi</h4>
                        </div>
                        <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta
                            tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at.
                            Dolorem quo tempora. Quia et perferendis.</p>

                        <div class="d-flex align-items-center mt-4">
                            <i class="bi bi-check2"></i>
                            <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                        </div>
                        <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam
                            officia aut ut alias quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam
                            odit enim quaerat. Vero error error voluptatem eum.</p>

                    </div><!-- End Tab 3 Content -->

                </div>

            </div>

        </div>

    </div>
</section><!-- End About Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="team">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Our Team</h2>
            <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam
                voluptas asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p>
        </div>

        <div class="row gy-5 justify-content-center">

            <div class="col-xl-4 col-md-6 d-flex " data-aos="zoom-in" data-aos-delay="200">
                <div class="team-member">
                    <div class="member-img">
                        <img src="{{ asset('img/team/team-1.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                        <h4>Walter White</h4>
                        <span>Chief Executive Officer</span>
                    </div>
                </div>
            </div><!-- End Team Member -->

        </div>

    </div>
</section><!-- End Team Section -->

@endsection