@extends($layout)
@section('content')
    @include($header . 'header-three')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Our Infrastructure',
        'page' => 'Infrastructure',
    ])

    @include($components . 'campus-tour', ['class' => 'rts-section-padding'])

    <!-- multi row item -->
    <div class="rts-multi-row-section pt--100">
        <div class="container">
            <!-- first -->
            <div id="library" class="row g-5 justify-content-center justify-content-start align-items-center">
                <div class="col-lg-7 col-md-11">
                    <div class="rts-multi-row-image">
                        <img src="{{ asset('assets/images/feature/library.jpg') }}" alt="undergraduate education">
                    </div>
                </div>
                <div class="col-lg-5 col-md-11">
                    <div class="rts-multi-row-content">
                        <h4 class="row-title">Library</h4>
                        <p>The school library is a sanctuary of learning, housing approximately 28,800 books, including
                            reference materials like encyclopedias, yearbooks, dictionaries, almanacs, and atlases. It also
                            offers a vibrant collection of biographies, magazines (educational, entertainment, religious,
                            and sports), aiming to match every reader with the right book.</p>
                    </div>
                </div>
            </div>
            <!-- second -->
            <div id="computer-lab" class="row g-5 justify-content-center justify-content-start align-items-center">
                <div class="col-lg-5 col-md-11">
                    <div class="rts-multi-row-content left-side">
                        <h3 class="row-title">Computer Lab</h3>
                        <p>Equipped with three modern labs, the school provides hands-on learning with the latest hardware
                            (i3 10th Gen, 1TB SSD, 8GB RAM, LED monitors) and software (word processors, spreadsheets, image
                            editing, animation, etc.).
                            Computer education is mandatory from Class I-XII as per NEP, and internet access is allowed
                            under teacher supervision. Additional facilities include audio-visual labs and a collection of
                            inspirational movies.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-11">
                    <div class="rts-multi-row-image">
                        <img src="{{ asset('assets/images/feature/computer.jpg') }}" alt="undergraduate education">
                    </div>
                </div>
            </div>
            <!-- third -->
            <div id="composite-science-lab" class="row g-5 justify-content-center justify-content-start align-items-center">
                <div class="col-lg-7 col-md-11">
                    <div class="rts-multi-row-image">
                        <img src="{{ asset('assets/images/feature/physics-lab.jpg') }}" alt="undergraduate education">
                    </div>
                </div>
                <div class="col-lg-5 col-md-11">
                    <div class="rts-multi-row-content">
                        <div class="program-list">
                            <div class="single-list">
                                <h4 class="row-title">Composite Science Lab</h4>
                                <p>Our Composite Science Lab is a well-equipped, CBSE-compliant facility designed to bring
                                    scientific concepts to life. The lab provides students from Classes IX–XII with
                                    opportunities to explore Physics, Chemistry, and Biology through hands-on experiments
                                    and demonstrations. From studying electrical circuits and mechanics to chemical
                                    reactions and biological models, the lab nurtures curiosity and strengthens theoretical
                                    knowledge with practical applications. Spacious, safe, and regularly updated with modern
                                    apparatus, the lab ensures an engaging environment where students learn through
                                    observation, experimentation, and discovery.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fourth -->
            <div id="auditorium" class="row g-5 justify-content-center justify-content-start align-items-center">
                <div class="col-lg-5 col-md-11">
                    <div class="rts-multi-row-content left-side">
                        <h3 class="row-title">Auditorium</h3>
                        <p>Our state-of-the-art auditorium provides the perfect setting for cultural programs, seminars,
                            workshops, and interactive sessions. With spacious seating, advanced audio-visual systems, and
                            proper lighting, it offers an ideal environment for both academic and co-curricular activities.
                            The auditorium serves as a hub for school events, guest lectures, and student performances,
                            encouraging confidence, creativity, and collaborative learning.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-11">
                    <div class="rts-multi-row-image">
                        <img src="{{ asset('assets/images/feature/audit.jpg') }}" alt="undergraduate education">
                    </div>
                </div>
            </div>
            <!-- fifth -->
            <div id="sports-room" style="margin-bottom: 100px; "
                class="row g-5 justify-content-center justify-content-start align-items-center">
                <div class="col-lg-7 col-md-11">
                    <div class="rts-multi-row-image">
                        <img src="{{ asset('assets/images/feature/sports-room.jpg') }}" alt="undergraduate education">
                    </div>
                </div>
                <div class="col-lg-5 col-md-11">
                    <div class="rts-multi-row-content">
                        <div class="program-list">
                            <div class="single-list">
                                <h4 class="row-title">Maths Lab</h4>
                                <p>Promoting the philosophy of ‘Learning by Doing’, the school encourages students to explore mathematical concepts through hands-on activities and experiments. The lab is equipped with:
                                <ul>
                                    <li>Geometrical models</li>
                                    <li>Algebraic kits</li>
                                    <li>Mathematical games and puzzles</li>
                                    <li>Abacus and Vedic Maths tools</li>
                                    <li>Measurement instruments</li>
                                    <li>Abacus and Vedic Maths tools</li>
                                    <li>Measurement instruments</li>
                                    <li>Graphical aids and charts</li>
                                    <li>Interactive software and digital resources</li>
                                </ul>
                                Students enhance logical thinking, problem-solving skills, and creativity while developing a strong foundation in mathematics. They participate and excel in inter-school quizzes, Olympiads, and competitions at zonal, state, and national levels.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- multi row item end -->

    @include($components . 'newsletter', ['class' => 'rts-cta-background'])
    @include($footer . 'footer-v3', ['class' => 'v_2 pt--100 pb--100', 'cclass' => 'v_1'])
@endsection
