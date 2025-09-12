@extends($layout)
@section('content')
    @include($header . 'header-three')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'About Pioneer Kamal Convent',
        'page' => 'about Us',
    ])

    <!-- about university -->
    <section class="rts-about-university rts-section-padding">
        <div class="container">
            <div class="row">
                <div class="rts-section">
                    <div class="col-lg-4 col-md-5">
                        <h3 class="rts-section-title">About School</h3>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <p class="rts-section-description">
                            Established in 1997, Pioneer Kamal Convent School has been shaping young minds with quality
                            education, moral values, and holistic growth. For over two decades, the school has prepared
                            responsible, confident individuals who face challenges with integrity and knowledge
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-5 justify-content-md-center justify-content-start">
                <div class="col-lg-7 col-xl-8 col-md-11">
                    <div class="rts-about-section">
                        <img src="{{ asset('assets/images/about/about-01.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4 col-md-11">
                    <div class="rts-about-details">
                        <div class="single-about-info">
                            <div class="content">
                                <h3 class="title">1,800+</h3>
                                <img src="{{ asset('assets/images/icon/11.svg') }}" alt="">
                            </div>
                            <div class="desc">
                                <p>Enrolled Students from Nursery to Class 10
                                </p>
                            </div>
                        </div>
                        <div class="single-about-info">
                            <div class="content">
                                <h3 class="title"> 120+</h3>
                                <img src="{{ asset('assets/images/icon/12.svg') }}" alt="">
                            </div>
                            <div class="desc">
                                <p>Experienced Faculty & Staff</p>
                            </div>
                        </div>
                        <div class="single-about-info">
                            <div class="content">
                                <h3 class="title">3,500+</h3>
                                <img src="{{ asset('assets/images/icon/13.svg') }}" alt="">
                            </div>
                            <div class="desc">
                                <p>Pioneer Alumni Across India</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about university end -->

    <!-- history -->
    <div class="rts-history">
        <div class="container">
            <div class="row g-5 justify-content-md-center justify-content-start align-items-center">
                <div class="col-lg-6 col-md-11">
                    <div class="rts-history-image">
                        <img src="{{ asset('assets/images/about/history.jpg') }}" alt="history">
                    </div>
                </div>
                <div class="col-lg-6 col-md-11">
                    <div class="rts-history-section">
                        <h4 class="rts-section-title mb--40">Our Story</h4>
                        <p>
                            Since its foundation in 1997, Pioneer Kamal Convent School has grown into one of Delhi’s most
                            respected CBSE-affiliated schools. Nestled in the heart of Vikas Nagar, our campus provides a
                            vibrant learning environment that nurtures creativity and curiosity.
                            <span class="d-block mb--30"></span>
                            From Pre-Primary to Class X, we offer modern infrastructure, innovative teaching methodologies,
                            and a faculty committed to child-centric education. Following the Multiple Intelligence Theory,
                            we recognize and cultivate each child’s unique potential.
                            <span class="d-block mb--30"></span>
                            By blending academics with co-curricular activities, life skills, and cultural values, we
                            empower our students to grow into confident, ethical, and successful individuals ready to make
                            meaningful contributions to society.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- history end-->

    <!-- funfact -->
    <div class="rts-funfact rts-section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 ">
                    <div class="rts-funfact-wrapper">
                        <div class="single-cta-item">
                            <h2 class="single-cta-item__title">100%</h2>
                            <p>Board Exam Success Rate</p>
                        </div>
                        <div class="single-cta-item">
                            <h2 class="single-cta-item__title">Top Ranked</h2>
                            <p>Among Child-Centric Schools</p>
                        </div>
                        <div class="single-cta-item">
                            <h2 class="single-cta-item__title">Since 1995</h2>
                            <p>Trusted Legacy of Education</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- funfact end -->


    <!-- mission -->
    <section class="rts-mission">
        <div class="container">
            <div class="row justify-content-center rt-center">
                <div class="rts-section mb--50">
                    <h2 class="rts-section-title">Mission and Vision</h2>
                </div>
            </div>
            <!-- mission -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="rts-timeline-section">
                        <div class="rts-timeline-content">
                            <div class="left-side">
                                <div class="single-timeline-item">
                                    <h5 class="timeline-title"></h5>
                                    <p>Combine values and modern education to nurture confident, future-ready global
                                        citizens.
                                    </p>
                                    <img src="{{ asset('assets/images/about/mission-1.jpg') }}" alt="">
                                </div>
                                <div class="single-timeline-item">
                                    <h5 class="timeline-title"></h5>
                                    <p>Promote balanced growth through academics, co-curricular activities, and
                                        character-building experiences.

                                    </p>
                                    <img src="{{ asset('assets/images/about/mission-2.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="separator">
                            </div>
                            <div class="right-side">
                                <div class="single-timeline-item">
                                    <h5 class="timeline-title"></h5>
                                    <p> Nurture minds through creativity, compassion, leadership, and student-centered
                                        learning environments.
                                    </p>
                                    <img src="{{ asset('assets/images/about/mission-3.jpg') }}" alt="">
                                </div>
                                <div class="single-timeline-item">
                                    <h5 class="timeline-title"></h5>
                                    <p>
                                        Inspire students to become innovative, ethical, and environmentally conscious
                                        leaders of tomorrow.
                                    </p>
                                    <img src="{{ asset('assets/images/about/mission-4.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- mission end-->

    @include($components . 'campus-tour', ['class' => 'rts-section-padding'])
    {{-- @include($components . 'testimonial-v3', ['class' => 'rts-section-padding']) --}}
    @include($components . 'newsletter', ['class' => 'rts-cta-background'])
    @include($footer . 'footer-v3', ['class' => 'v_2 pt--100 pb--100', 'cclass' => 'v_1'])
@endsection
