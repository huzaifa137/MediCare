@include('Site.layouts.header')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option spad set-bg" data-setbg="/assets-site/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Our Services</h2>
                    <div class="breadcrumb__links">
                        <a href="{{ url('index') }}">Home</a>
                        <span>Services</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Services Section Begin -->
<section class="services-page spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-lg-2">
                <div class="services__details">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__details__title">
                                <span>Medical Services</span>
                                <h3>General Consultation</h3>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__details__widget">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h3>$ 159.50</h3>
                            </div>
                        </div>
                    </div>
                    <div class="services__details__pic">
                        <img src="/assets-site/img/services/services-details.jpg" alt="General consultation">
                    </div>
                    <div class="services__details__text">
                        <p>Our general medical consultation service connects you with qualified, licensed doctors for
                            expert medical advice, diagnosis, and treatment recommendations — all from the comfort of
                            your home.</p>
                        <p>Whether you’re experiencing symptoms, need a follow-up, or just want peace of mind, our
                            consultations are designed to provide fast, confidential, and convenient access to
                            healthcare professionals.</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="services__details__item__pic">
                                <img src="/assets-site/img/services/sd-1.jpg" alt="Online consultation">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="services__details__item__pic">
                                <img src="/assets-site/img/services/sd-2.jpg" alt="Doctor support">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="services__details__item__pic">
                                <img src="/assets-site/img/services/sd-3.jpg" alt="Medical treatment">
                            </div>
                        </div>
                    </div>
                    <div class="services__details__desc">
                        <p>Every consultation is conducted securely via video or chat, depending on your preference. Our
                            platform is built with privacy in mind, ensuring your health information stays protected.
                            From common colds to ongoing conditions like hypertension or diabetes, we’re here to support
                            your health journey.</p>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul class="services__details__feature">
                                    <li><i class="fa fa-check-circle"></i> Consult with certified doctors online</li>
                                    <li><i class="fa fa-check-circle"></i> Same-day appointments available</li>
                                    <li><i class="fa fa-check-circle"></i> Prescriptions sent to your pharmacy</li>
                                    <li><i class="fa fa-check-circle"></i> Follow-up and referral options</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul class="services__details__feature">
                                    <li><i class="fa fa-check-circle"></i> Confidential and secure sessions</li>
                                    <li><i class="fa fa-check-circle"></i> Available 7 days a week</li>
                                    <li><i class="fa fa-check-circle"></i> Mobile and desktop support</li>
                                    <li><i class="fa fa-check-circle"></i> No long wait times</li>
                                </ul>
                            </div>
                        </div>
                        <p>Book your consultation today and take the first step toward better health. Our dedicated team
                            is ready to provide the guidance and care you need — whenever you need it.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 order-lg-1">
                <div class="services__sidebar">
                    <div class="services__accordion">
                        <div class="services__title">
                            <h4><img src="/assets-site/img/icons/services-icon.png" alt=""> All services</h4>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <!-- General Consultations -->
                            <div class="card">
                                <div class="card-heading active">
                                    <a data-toggle="collapse" data-target="#collapseOne">
                                        General Consultations
                                    </a>
                                </div>
                                <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">Adult General Consultation</a></li>
                                            <li><a href="#">Pediatric Consultation</a></li>
                                            <li><a href="#">Chronic Disease Management</a></li>
                                            <li><a href="#">Second Opinion Services</a></li>
                                            <li><a href="#">Prescription Refills</a></li>
                                            <li><a href="#">Follow-up Appointments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Mental Health -->
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseTwo">
                                        Mental Health
                                    </a>
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">Depression & Anxiety Counseling</a></li>
                                            <li><a href="#">Stress Management</a></li>
                                            <li><a href="#">Therapy Sessions</a></li>
                                            <li><a href="#">Sleep Disorders</a></li>
                                            <li><a href="#">Addiction Counseling</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Women's Health -->
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseThree">
                                        Women's Health
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">Gynecological Consultations</a></li>
                                            <li><a href="#">Menstrual Disorders</a></li>
                                            <li><a href="#">Fertility Advice</a></li>
                                            <li><a href="#">Pregnancy Care Guidance</a></li>
                                            <li><a href="#">Menopause Support</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Skin Care & Dermatology -->
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseFour">
                                        Dermatology
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">Acne Treatment</a></li>
                                            <li><a href="#">Skin Rash & Allergies</a></li>
                                            <li><a href="#">Hair Loss Consultation</a></li>
                                            <li><a href="#">Eczema & Psoriasis</a></li>
                                            <li><a href="#">Mole & Skin Tag Evaluation</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Diagnostic Services -->
                            <div class="card">
                                <div class="card-heading">
                                    <a data-toggle="collapse" data-target="#collapseFive">
                                        Diagnostic Services
                                    </a>
                                </div>
                                <div id="collapseFive" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">Lab Test Requests</a></li>
                                            <li><a href="#">Imaging Referrals</a></li>
                                            <li><a href="#">Medical Certificates</a></li>
                                            <li><a href="#">Health Screenings</a></li>
                                            <li><a href="#">Blood Pressure & Glucose Monitoring</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Appointment Booking -->
                    <div class="services__appoinment">
                        <div class="services__title">
                            <h4><img src="/assets-site/img/icons/services-icon.png" alt=""> Get an appointment</h4>
                        </div>
                        <form action="#">
                            <input type="text" placeholder="Name">
                            <input type="text" placeholder="Email">
                            <div class="datepicker__item">
                                <input type="text" placeholder="Date" class="datepicker">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <select>
                                <option value="">Type of service</option>
                                <option value="general">General Consultation</option>
                                <option value="mental-health">Mental Health</option>
                                <option value="womens-health">Women's Health</option>
                                <option value="dermatology">Dermatology</option>
                                <option value="diagnostics">Diagnostic Services</option>
                            </select>
                            <button type="submit" class="site-btn">Book appointment</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Services Section End -->

@include('Site.layouts.footer')