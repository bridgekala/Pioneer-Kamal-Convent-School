@extends($layout)
@section('content')
    @include($header . 'header-three')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Fee Structure for the Academic Year 2025–2026',
        'page' => 'Admission',
    ])

    <!-- tution fee -->
    <div class="page-content-top pt--120 pt__md--80">
        <div class="container">
            <div class="row">
                <h3 class="rts-section-title">About Tuition & Fees</h3>
                <p class="desc">The fee structure for the academic year 2025–2026 is designed to offer quality education at
                    a fair cost. Monthly fees, annual charges, and admission fees vary by class level, ensuring that
                    students across grades have access to structured learning at reasonable rates.
                    All tuition details are reviewed and proposed in advance to allow parents and guardians sufficient time
                    for planning.

                    Additional development charges at 15% of the total fee may apply, and these are utilized strictly under
                    designated educational development heads.
                </p>
                </li>
            </div>
        </div>
    </div>
    <!-- semister fee chart -->
    <div class="semister-fee pb--120 pb__md--80">
        <div class="container">
            <div class="row">
                <div class="semister-fee__content">
                    <h5 class="rts-section-title">Pre-Primary</h5>

                    <!-- tab item -->
                    <div class="rts-fee-chart">

                        <div class="rts-fee-chart__content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="undergrade-1" role="tabpanel"
                                aria-labelledby="undergrade-1-tab">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <th>Class</th>
                                            <th>Monthly Fee (₹)</th>
                                            <th> Annual Charges (₹)</th>
                                            <th> Admission Fee (₹)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Pre-Primary</td>
                                            <td>2,580</td>
                                            <td>4,440
                                            </td>
                                            <td>200
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- second part -->
                <div class="semister-fee__content mt--80 v_2">
                    <h5 class="rts-section-title">Primary (Class I – V)</h5>
                    <!-- tab item -->
                    <div class="rts-fee-chart">

                        <div class="rts-fee-chart__content" id="nav-tabContent2">
                            <div class="tab-pane fade show active" id="undergrade" role="tabpanel"
                                aria-labelledby="undergrade-tab">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <td>Class</td>
                                            <td>Monthly Fee (₹)</td>
                                            <td>Annual Charges (₹)</td>
                                            <td>Admission Fee (₹)</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>I</td>
                                            <td>2,580</td>
                                            <td>4,880</td>
                                            <td>200</td>
                                        </tr>
                                        <tr>
                                        <tr>
                                            <td>II</td>
                                            <td>3,070</td>
                                            <td>4,880</td>
                                            <td>200</td>
                                        </tr>
                                        </tr>
                                        <tr>
                                            <td>III</td>
                                             <td>3,070</td>
                                            <td>4,880</td>
                                            <td>200</td>
                                        </tr>
                                        <tr>
                                            <td>IV</td>
                                            <td>3,070</td>
                                            <td>4,880</td>
                                            <td>200</td>
                                        </tr>
                                        <tr>
                                            <td>V</td>
                                             <td>3,070</td>
                                            <td>4,880</td>
                                            <td>200</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Third part --}}
                <div class="semister-fee__content mt--80 v_2">
                    <h5 class="rts-section-title">Middle (Class VI – VIII)</h5>
                    <!-- tab item -->
                    <div class="rts-fee-chart">

                        <div class="rts-fee-chart__content" id="nav-tabContent2">
                            <div class="tab-pane fade show active" id="undergrade" role="tabpanel"
                                aria-labelledby="undergrade-tab">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <td>Class</td>
                                            <td>Monthly Fee (₹)</td>
                                            <td>Annual Charges (₹)</td>
                                            <td>Admission Fee (₹)</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>VI</td>
                                            <td>3,490</td>
                                            <td>6,360</td>
                                            <td>200</td>
                                        </tr>
                                        <tr>
                                        <tr>
                                            <td>VII</td>
                                             <td>3,490</td>
                                            <td>6,360</td>
                                            <td>200</td>
                                        </tr>
                                        </tr>
                                        <tr>
                                            <td>VIII</td>
                                            <td>3,490</td>
                                            <td>6,360</td>
                                            <td>200</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- fourth part --}}
                <div class="semister-fee__content mt--80 v_2">
                    <h5 class="rts-section-title">Secondary (Class IX – X)</h5>
                    <!-- tab item -->
                    <div class="rts-fee-chart">

                        <div class="rts-fee-chart__content" id="nav-tabContent2">
                            <div class="tab-pane fade show active" id="undergrade" role="tabpanel"
                                aria-labelledby="undergrade-tab">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <td>Class</td>
                                            <td>Monthly Fee (₹)</td>
                                            <td>Annual Charges (₹)</td>
                                            <td>Admission Fee (₹)</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>IX</td>
                                            <td>4,460</td>
                                            <td>8,500</td>
                                            <td>200</td>
                                        </tr>
                                        <tr>
                                        <tr>
                                            <td>X</td>
                                            <td>4,460</td>
                                            <td>8,500</td>
                                            <td>200</td>
                                        </tr>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    <!-- tution fee end -->

    @include($components . 'newsletter', ['class' => 'rts-cta-background'])
    @include($footer . 'footer-v3', ['class' => 'v_2 pt--100 pb--100', 'cclass' => 'v_1'])
@endsection
