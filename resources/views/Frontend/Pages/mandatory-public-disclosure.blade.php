@extends($layout)
@section('content')
    @include($header . 'header-three')
    @include($elements . 'breadcrumb', [
        'class' => 'breadcrumb-height breadcumb-bg',
        'image' => 'breadcrumb.jpg',
        'title' => 'Mandatory Public Disclosure',
        'page' => 'Disclosure',
    ])


    <div class="semister-fee pb--120 pb__md--80">
        <div class="container">
            <div class="row">

                <!-- A. GENERAL INFORMATION -->
                <div class="semister-fee__content">
                    <h5 class="rts-section-title">A. GENERAL INFORMATION</h5>
                    <div class="rts-fee-chart">
                        <div class="rts-fee-chart__content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="undergrade-1" role="tabpanel"
                                aria-labelledby="undergrade-1-tab">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <th>S. NO.</th>
                                            <th>INFORMATION</th>
                                            <th>DETAILS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>NAME OF THE SCHOOL</td>
                                            <td> PIONEER KAMAL CONVENT SCHOOL</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>AFFILIATION NO (IF APPLICABLE)</td>
                                            <td>2730422</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>SCHOOL CODE (IF APPLICABLE)</td>
                                            <td>85351</td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>COMPLETE ADDRESS WITH PIN CODE</td>
                                            <td>A-Block, Vikas Nagar, Delhi - 110059</td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>PRINCIPAL'S NAME AND QUALIFICATION</td>
                                            <td>Mrs. Mallika Bajaj, M.Tech, B.Ed</td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>SCHOOL EMAIL ID</td>
                                            <td>pioneerkamalconvent@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>CONTACT DETAILS (LANDLINE/MOBILE)</td>
                                            <td>9555111155</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- B. DOCUMENTS AND INFORMATION -->
                <div class="semister-fee__content mt--80 v_2">
                    <h5 class="rts-section-title">B. DOCUMENTS AND INFORMATION</h5>
                    <div class="rts-fee-chart">
                        <div class="rts-fee-chart__content" id="nav-tabContent2">
                            <div class="tab-pane fade show active" id="undergrade" role="tabpanel"
                                aria-labelledby="undergrade-tab">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <td>S. NO.</td>
                                            <td>DOCUMENTS/INFORMATION</td>
                                            <td>UPLOAD DOCUMENTS</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>COPIES OF AFFILIATION/UPGRADATION LETTER AND RECENT EXTENSION OF
                                                AFFILIATION, IF ANY</td>
                                            <td> <a href="{{ asset('documents/affiliation_letter.pdf') }}" target="_blank">ATTACHED</a></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>COPIES OF SOCIETIES/TRUST/COMPANY REGISTRATION/ RENEWAL CERTIFICATE AS
                                                APPLICABLE</td>
                                            <td> <a href="{{ asset('documents/societies_registration.pdf') }}" target="_blank">ATTACHED</a></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>COPY OF NO OBJECTION CERTIFICATE (NOC) ISSUED IF APPLICABLE BY THE STATE
                                                GOVT./UT</td>
                                            <td> <a href="{{ asset('documents/recognition_1_to_8.pdf') }}" target="_blank">ATTACHED</a></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>COPIES OF RECOGNITION CERTIFICATE UNDER RTE ACT, 2009 AND ITS RENEWAL IF
                                                APPLICABLE</td>
                                            <td> <a href="{{ asset('documents/upgradation_to_secondary.pdf') }}" target="_blank">ATTACHED</a></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>COPY OF VALID BUILDING SAFETY CERTIFICATE AS PER THE NATIONAL BUILDING CODE
                                            </td>
                                            <td> <a href="{{ asset('documents/building_safety_certificate.pdf') }}" target="_blank">ATTACHED</a></td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>COPY OF VALID FIRE SAFETY CERTIFICATE ISSUED BY THE COMPETENT AUTHORITY</td>
                                            <td> <a href="{{ asset('documents/fire_safety_certificate.pdf') }}" target="_blank">ATTACHED</a></td>
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>COPY OF THE DEO CERTIFICATE SUBMITTED BY THE SCHOOL FOR
                                                AFFILIATION/UPGRADATION/EXTENSION OF AFFILIATION OR SELF CERTIFICATION BY
                                                SCHOOL</td>
                                            <td> <a href="{{ asset('documents/deo_certificate.pdf') }}" target="_blank">ATTACHED</a></td>
                                        </tr>
                                        <tr>
                                            <td>8.</td>
                                            <td>COPIES OF VALID WATER, HEALTH AND SANITATION CERTIFICATE</td>
                                            <td> <a href="{{ asset('documents/water_health_certificate.pdf') }}" target="_blank">ATTACHED</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- C. RESULTS AND ACADEMIC -->
                <div class="semister-fee__content mt--80 v_2">
                    <h5 class="rts-section-title">C. RESULTS AND ACADEMIC</h5>
                    <div class="rts-fee-chart">
                        <div class="rts-fee-chart__content" id="nav-tabContent2">
                            <div class="tab-pane fade show active" id="undergrade" role="tabpanel"
                                aria-labelledby="undergrade-tab">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <td>S. NO.</td>
                                            <td>DOCUMENTS/INFORMATION</td>
                                            <td>UPLOAD DOCUMENTS</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>FEE STRUCTURE OF THE SCHOOL</td>
                                            <td><a href="{{ asset('documents/fee_structure.pdf') }}" target="_blank">ATTACHED</a></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>ANNUAL ACADEMIC CALENDAR</td>
                                            <td><a href="{{ asset('documents/academic_calendar.pdf') }}" target="_blank">ATTACHED</a></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>LIST OF SCHOOL MANAGEMENT COMMITTEE (SMC)</td>
                                            <td><a href="{{ asset('documents/school_managing_committee.pdf') }}" target="_blank">ATTACHED</a></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>LIST OF PARENTS TEACHERS ASSOCIATION (PTA) MEMBERS</td>
                                            <td><a href="{{ asset('documents/pta.pdf') }}" target="_blank">ATTACHED</a></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>LAST THREE YEAR RESULT OF THE BOARD EXAMINATION AS PER APPLICABILITY</td>
                                            <td>Given Below</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <h5 class="rts-section-title mt--40">RESULT CLASS: X</h5>
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <td>SL No.</td>
                                            <td>YEAR</td>
                                            <td>NO. OF REGISTERED STUDENTS</td>
                                            <td>NO. OF STUDENTS PASSED</td>
                                            <td>PASS PERCENTAGE</td>
                                            <td>REMARKS</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>2022-2023</td>
                                            <td>37</td>
                                            <td>37</td>
                                            <td>100%</td>
                                            <td>EXCELLENT</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>2023-2024</td>
                                            <td>39</td>
                                            <td>39</td>
                                            <td>100%</td>
                                            <td>EXCELLENT</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>2024-2025</td>
                                            <td>42</td>
                                            <td>42</td>
                                            <td>100%</td>
                                            <td>EXCELLENT</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- D. STAFF (TEACHING) -->
                <div class="semister-fee__content mt--80 v_2">
                    <h5 class="rts-section-title">D. STAFF (TEACHING)</h5>
                    <div class="rts-fee-chart">
                        <div class="rts-fee-chart__content" id="nav-tabContent2">
                            <div class="tab-pane fade show active" id="undergrade" role="tabpanel"
                                aria-labelledby="undergrade-tab">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <td>S. NO.</td>
                                            <td>INFORMATION</td>
                                            <td>DETAILS</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>PRINCIPAL</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>TOTAL NO. OF TEACHERS</td>
                                            <td>20<br>TGT – 08<br>PRT – 12</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>TEACHERS SECTION RATIO</td>
                                            <td>1.5:1</td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>DETAILS OF SPECIAL EDUCATOR</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>DETAILS OF COUNSELLOR AND WELLNESS TEACHER</td>
                                            <td>1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- E. SCHOOL INFRASTRUCTURE -->
                <div class="semister-fee__content mt--80 v_2">
                    <h5 class="rts-section-title">E. SCHOOL INFRASTRUCTURE</h5>
                    <div class="rts-fee-chart">
                        <div class="rts-fee-chart__content" id="nav-tabContent2">
                            <div class="tab-pane fade show active" id="undergrade" role="tabpanel"
                                aria-labelledby="undergrade-tab">
                                <table class="table">
                                    <thead class="table-theme">
                                        <tr>
                                            <td>S. NO.</td>
                                            <td>INFORMATION</td>
                                            <td>DETAILS</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>TOTAL CAMPUS AREA OF THE SCHOOL (IN SQUARE MTR)</td>
                                            <td>2098</td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>NO. AND SIZE OF THE CLASS ROOMS (IN SQUARE MTR)</td>
                                            <td>26 (47 Sqr. mtr.)</td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>NO. AND SIZE OF LABORATORIES INCLUDING COMPUTER LABS (IN SQUARE MTR)</td>
                                            <td>3 (69 Sqr. mtr)</td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>INTERNET FACILITY (Y/N)</td>
                                            <td>YES</td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>NO. OF GIRLS TOILET</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>NO. OF BOYS TOILET</td>
                                            <td>12</td>
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>LINK TO YOUTUBE VIDEO OF THE INSPECTION OF SCHOOL COVERING THE
                                                INFRASTRUCTURE OF THE SCHOOL</td>
                                            <td><a href="https://youtu.be/kjMUu37588s"
                                                    target="_blank">https://youtu.be/kjMUu37588s</a></td>
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

    @include($components . 'newsletter', ['class' => 'rts-cta-background'])
    @include($footer . 'footer-v3', ['class' => 'v_2 pt--100 pb--100', 'cclass' => 'v_1'])
@endsection
