@include('Site.layouts.header')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option spad set-bg" data-setbg="/assets-site/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Our team</h2>
                    <div class="breadcrumb__links">
                        <a href="{{ url('index') }}">Home</a>
                        <a href="{{ url('about') }}">About</a>
                        <span>Doctor</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Doctor Section Begin -->
<section class="doctor spad">
    <div class="container">
        <!-- Doctor 1 -->
        <div class="doctor__item">
            <div class="row">
                <!-- Doctor Image -->
                <div class="col-lg-6 order-lg-1">
                    <div class="doctor__item__pic">
                        <img src="/assets-site/img/doctor/doctor-1.jpg" alt="Dr Emili Craythorne">
                        <!-- Optional Video Intro -->
                        <div class="doctor__item__video mt-4">
                            <a href="https://www.youtube.com/watch?v=sample" target="_blank">
                                <i class="fa fa-play-circle"></i> Watch Introduction
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Doctor Info -->
                <div class="col-lg-6 order-lg-2">
                    <div class="doctor__item__text">
                        <span>MBBS, MRCP(UK), CCST(DERM)</span>
                        <h2>Dr. Emili Craythorne</h2>
                        <p>
                            Dr. Emili Craythorne is a board-certified dermatologist and aesthetic specialist with over
                            15 years
                            of experience in cosmetic skin procedures. She specializes in non-invasive rejuvenation
                            techniques
                            and laser treatments, offering personalized skincare plans tailored to each patient’s unique
                            needs.
                        </p>

                        <!-- Key Highlights -->
                        <ul>
                            <li><i class="fa fa-check-circle"></i> Expert in non-surgical facial rejuvenation</li>
                            <li><i class="fa fa-check-circle"></i> Certified laser therapy specialist</li>
                            <li><i class="fa fa-check-circle"></i> Focus on natural, lasting results</li>
                            <li><i class="fa fa-check-circle"></i> Comprehensive patient education</li>
                            <li><i class="fa fa-check-circle"></i> Member of British Association of Dermatologists</li>
                        </ul>

                        <!-- Areas of Expertise Tags -->
                        <div class="doctor__item__tags">
                            <strong>Specialties:</strong>
                            <span class="badge badge-primary text-white">Laser Treatments</span>
                            <span class="badge badge-success text-white">Anti-Aging</span>
                            <span class="badge badge-info text-white">Acne Scarring</span>
                            <span class="badge badge-warning text-white">Skin Tightening</span>
                        </div>

                        <!-- Clinic Schedule -->
                        <div class="doctor__item__schedule mt-3">
                            <strong>Clinic Schedule:</strong>
                            <ul>
                                <li>Monday – Thursday: 9:00 AM – 5:00 PM</li>
                                <li>Friday: 10:00 AM – 3:00 PM</li>
                                <li>Saturday & Sunday: Closed</li>
                            </ul>
                        </div>

                        <!-- Contact Info -->
                        <div class="doctor__item__contact mt-3">
                            <strong>Contact:</strong>
                            <p>
                                Email: <a href="mailto:dr.emili@example.com">dr.emili@example.com</a><br>
                                Phone: <a href="tel:+441234567890">+44 1234 567 890</a><br>
                                Location: London Dermatology Clinic, Harley Street, London
                            </p>
                        </div>

                        <!-- Awards & Certifications -->
                        <div class="doctor__item__awards mt-3">
                            <strong>Honors & Certifications:</strong>
                            <ul>
                                <li>Top Dermatologist Award – UK Aesthetics Awards 2021</li>
                                <li>Certified by American Board of Laser Surgery</li>
                                <li>Fellow of Royal College of Physicians</li>
                            </ul>
                        </div>

                        <!-- Languages -->
                        <div class="doctor__item__languages mt-3">
                            <strong>Languages Spoken:</strong>
                            <p>English, Spanish, French</p>
                        </div>

                        <!-- Patient Testimonials -->
                        <div class="doctor__item__testimonials mt-3">
                            <strong>Patient Feedback:</strong>
                            <blockquote>
                                "Dr. Craythorne truly transformed my skin. Her approach is professional, kind, and
                                highly personalized." <br>
                                <cite>– Sarah W., London</cite>
                            </blockquote>
                        </div>

                        <!-- CTA -->
                        <div class="doctor__item__cta mt-4">
                            <a href="/appointments" class="btn btn-primary">Talk to Dr. Emili</a>
                            <a href="/cv/emili-craythorne.pdf" class="btn btn-outline-secondary ml-2"
                                target="_blank">Download CV</a>
                        </div>

                        <!-- Social Links -->
                        <div class="doctor__item__social mt-4">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<!-- Doctor Section End -->

@include('Site.layouts.footer')