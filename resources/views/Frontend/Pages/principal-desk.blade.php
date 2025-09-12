@extends($layout)
@section('content')
    @include($header . 'header-three')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => "Principal's Desk",
        'page' => 'About Us',
    ])

    <!-- faculty directory -->
    <section class="rts-faculty-details  rts-section-padding">
        <div class="container">
            <div class="row sticky-coloum-wrap justify-content-sm-center g-5">
                <div class="col-lg-4 col-md-10 col-sm-10 sticky-coloum-item">
                    <div class="faculty-member">
                        <div class="faculty-member__details rt-center ">
                            <div class="faculty-member__image">
                                <img src="{{ asset('assets/images/faculty/manager.jpg') }}" alt="member image">
                            </div>
                            <div class="faculty-member__info">
                                <div class="faculty-member__info--social">
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fa-brands fa-medium"></i></a>
                                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                                </div>
                                <a href="mailto:jenni@Unipixuni.edu" class="email-contact"><span><i
                                            class="fa-light fa-envelope"></i></span>----------</a>
                                <a href="calltto:121" class="phone-contact"><span><i
                                            class="fa-light fa-phone"></i></span>+xxxxxxxxxx</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-10 col-sm-10">
                    <div class="member-info ">
                        <div class="member-info__details">
                            <div class="short-info">
                                <h4 class="rts-section-title mb--15">Mrs. Mallika Bajaj</h4>
                                <span class="designation">Principal, Pioneer Kamal Convent School
                                </span>
                                <p class="description">
                                    With an unwavering passion for education and a profound belief in nurturing the mind,
                                    body, and soul, I serve as the Principal of Pioneer Kamal Convent School. Over the
                                    years, I have championed a dynamic educational model that blends timeless Indian values
                                    with global best practices and student-centric learning.
                                    Our school community is dedicated to fostering leadership, compassion, and discipline
                                    through academic excellence and vibrant co-curricular engagement. I firmly believe that
                                    education is not merely the transfer of knowledge, but the shaping of a conscious,
                                    responsible, and resilient generation ready to thrive in an ever-evolving world.
                                </p>
                            </div>
                            <div class="short-info">
                                <h5 class="rts-section-title">Educational Philosophy</h5>
                                <p class="description">
                                    At Pioneer Convent, we merge modern infrastructure with holistic pedagogy — integrating
                                    robotics, performing arts, sports, and life skills with academic rigor. Inspired by
                                    Howard Gardner’s Multiple Intelligence Theory, our curriculum identifies and nurtures
                                    each student’s unique potential.
                                    As an educational leader, I see my role as building strong partnerships with educators,
                                    parents, and stakeholders to create an ecosystem where respect, discipline, and
                                    curiosity flourish.
                                </p>
                                <h5 class="rts-section-title">Core Philosophy:</h5>
                                <p>
                                    <li>Integrity & Leadership</li>
                                    <li>Holistic, Student-Centered Learning</li>
                                    <li>Mind-Body-Soul Coordination</li>
                                    <li>Discipline, Empathy, and Respect</li>
                                    <li>Global Citizenship with Indian Values</li>
                                </p> <br>
                                <h5 class="rts-section-title">Message to Students</h5>
                                <p class="description">
                                    Respect your teachers, embrace discipline, and let education mold you into compassionate
                                    leaders. At Pioneer, learning is designed to be a joyful and transformative journey —
                                    one that prepares you not only for exams, but for life itself.
                                    Let us nurture love, unity, and purpose, and together, shape a better tomorrow.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faculty directory end -->

    @include($components . 'newsletter', ['class' => 'rts-cta-background'])
    @include($footer . 'footer-v3', ['class' => 'v_2 pt--100 pb--100', 'cclass' => 'v_1'])
@endsection
