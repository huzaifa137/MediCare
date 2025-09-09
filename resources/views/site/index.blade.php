@include('Site.layouts.header')

<!-- Hero Section Begin -->
<section class="hero spad set-bg" data-setbg="/assets-site/img/hero-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hero__text">
                    <span style="color: white; text-shadow: 0 0 2px #007BFF, 0 0 5px #007BFF, 0 0 10px #007BFF;">
                        Your Health, Our Priority
                    </span>



                    <h2 class="text-white">Take the world's best quality Treatment</h2>
                    <a href="{{ url('contact')}} " class="primary-btn normal-btn">Contact us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Consultation Section Begin -->
<section class="consultation">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div style="padding-top: 100px; position: relative;">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="consultation__text__item">
                                <div class="section-title">
                                    <span>Welcome to {{ Helper::app_name() }}</span>
                                    <h2>Find Trusted, Experienced Doctors with <b>{{ Helper::app_name() }}</b></h2>
                                </div>
                                <p>With decades of combined experience across various medical fields, our certified
                                    doctors provide personalized care, accurate diagnoses, and professional treatment —
                                    all from the comfort of your home.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="consultation__video set-bg"
                                data-setbg="/assets-site/img/consultation-video.jpg">
                                <a href="https://www.youtube.com/watch?v=PXsuI67s2AA" class="play-btn video-popup"><i
                                        class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .services__title {
                background-color: #f8f9fa;
                border: 1px solid #e9ecef;
                border-radius: 5px;
                padding: 15px;
                margin-bottom: 20px;
                text-align: left;
            }

            .services__title h4 {
                color: #333;
                font-weight: 600;
                font-size: 1.5rem;
                margin: 0;
            }

            .services__sidebar {
                background-color: #ffffff;
                border: 1px solid #e9ecef;
                border-radius: 5px;
                padding: 20px;
            }

            .services__accordion .card {
                border: 1px solid white;

            }
        </style>

        <div class="row">
            <div class="col-lg-12 order-lg-1">
                <div class="services__sidebar">
                    <div class="services__accordion">
                        <div class="services__title">
                            <h4><img src="/assets-site/img/icons/services-icon.png" alt=""> Our services</h4>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <!-- General Consultations -->
                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse"
                                    data-target="#collapseOne" style="cursor: pointer;">
                                    General Consultations
                                </div>
                                <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="{{ url('doctors')}}">Adult General Consultation</a></li>
                                            <li><a href="{{ url('doctors')}}">Pediatric Consultation</a></li>
                                            <li><a href="{{ url('doctors')}}">Chronic Disease Management</a></li>
                                            <li><a href="{{ url('doctors')}}">Second Opinion Services</a></li>
                                            <li><a href="{{ url('doctors')}}">Prescription Refills</a></li>
                                            <li><a href="{{ url('doctors')}}">Follow-up Appointments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse" data-target="#collapseTwo"
                                    style="cursor: pointer;">
                                    Mental Health
                                </div>
                                <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="{{ url('doctors')}}">Depression & Anxiety Counseling</a></li>
                                            <li><a href="{{ url('doctors')}}">Stress Management</a></li>
                                            <li><a href="{{ url('doctors')}}">Therapy Sessions</a></li>
                                            <li><a href="{{ url('doctors')}}">Sleep Disorders</a></li>
                                            <li><a href="{{ url('doctors')}}">Addiction Counseling</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse" data-target="#collapseThree"
                                    style="cursor: pointer;">
                                    Women's Health
                                </div>
                                <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="{{ url('doctors')}}">Gynecological Consultations</a></li>
                                            <li><a href="{{ url('doctors')}}">Menstrual Disorders</a></li>
                                            <li><a href="{{ url('doctors')}}">Fertility Advice</a></li>
                                            <li><a href="{{ url('doctors')}}">Pregnancy Care Guidance</a></li>
                                            <li><a href="{{ url('doctors')}}">Menopause Support</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Skin Care & Dermatology -->
                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse" data-target="#collapseFour"
                                    style="cursor: pointer;">
                                    Dermatology
                                </div>
                                <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="{{ url('doctors')}}">Acne Treatment</a></li>
                                            <li><a href="{{ url('doctors')}}">Skin Rash & Allergies</a></li>
                                            <li><a href="{{ url('doctors')}}">Hair Loss Consultation</a></li>
                                            <li><a href="{{ url('doctors')}}">Eczema & Psoriasis</a></li>
                                            <li><a href="{{ url('doctors')}}">Mole & Skin Tag Evaluation</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Diagnostic Services -->
                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse" data-target="#collapseFive"
                                    style="cursor: pointer;">
                                    Diagnostic Services
                                </div>
                                <div id="collapseFive" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="{{ url('doctors')}}">Lab Test Requests</a></li>
                                            <li><a href="{{ url('doctors')}}">Imaging Referrals</a></li>
                                            <li><a href="{{ url('doctors')}}">Medical Certificates</a></li>
                                            <li><a href="{{ url('doctors')}}">Health Screenings</a></li>
                                            <li><a href="{{ url('doctors')}}">Blood Pressure & Glucose Monitoring</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Cardiology -->
                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse" data-target="#collapseSix"
                                    style="cursor: pointer;">
                                    Cardiology
                                </div>
                                <div id="collapseSix" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="{{ url('doctors')}}">Heart Health Assessments</a></li>
                                            <li><a href="{{ url('doctors')}}">Hypertension Management</a></li>
                                            <li><a href="{{ url('doctors')}}">ECG/EKG Review</a></li>
                                            <li><a href="{{ url('doctors')}}">Cholesterol Monitoring</a></li>
                                            <li><a href="{{ url('doctors')}}">Post-Cardiac Event Follow-up</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Pediatrics -->
                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse" data-target="#collapseSeven"
                                    style="cursor: pointer;">
                                    Pediatrics
                                </div>
                                <div id="collapseSeven" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="{{ url('doctors')}}">Newborn Checkups</a></li>
                                            <li><a href="{{ url('doctors')}}">Vaccination Schedules</a></li>
                                            <li><a href="{{ url('doctors')}}">Growth & Development Tracking</a></li>
                                            <li><a href="{{ url('doctors')}}">Common Childhood Illnesses</a></li>
                                            <li><a href="{{ url('doctors')}}">Nutritional Advice for Children</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Orthopedics -->
                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse" data-target="#collapseEight"
                                    style="cursor: pointer;">
                                    Orthopedics
                                </div>
                                <div id="collapseEight" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="{{ url('doctors')}}">Joint Pain Evaluation</a></li>
                                            <li><a href="{{ url('doctors')}}">Back & Spine Consultations</a></li>
                                            <li><a href="{{ url('doctors')}}">Fracture Management</a></li>
                                            <li><a href="{{ url('doctors')}}">Arthritis Treatment</a></li>
                                            <li><a href="{{ url('doctors')}}">Sports Injuries</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- ENT (Ear, Nose, Throat) -->
                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse" data-target="#collapseNine"
                                    style="cursor: pointer;">
                                    ENT (Ear, Nose & Throat)
                                </div>
                                <div id="collapseNine" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="{{ url('doctors')}}">Sinusitis Treatment</a></li>
                                            <li><a href="{{ url('doctors')}}">Ear Infections</a></li>
                                            <li><a href="{{ url('doctors')}}">Throat Irritation</a></li>
                                            <li><a href="{{ url('doctors')}}">Hearing Assessments</a></li>
                                            <li><a href="{{ url('doctors')}}">Allergy-related ENT Issues</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Gastroenterology -->
                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse" data-target="#collapseTen"
                                    style="cursor: pointer;">
                                    Gastroenterology
                                </div>
                                <div id="collapseTen" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="{{ url('doctors')}}">Acid Reflux & GERD</a></li>
                                            <li><a href="{{ url('doctors')}}">IBS Management</a></li>
                                            <li><a href="{{ url('doctors')}}">Liver Function Monitoring</a></li>
                                            <li><a href="{{ url('doctors')}}">Constipation & Diarrhea</a></li>
                                            <li><a href="{{ url('doctors')}}">Digestive Health Checkups</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Urology -->
                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse" data-target="#collapseEleven"
                                    style="cursor: pointer;">
                                    Urology
                                </div>
                                <div id="collapseEleven" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="{{ url('doctors')}}">Urinary Tract Infections</a></li>
                                            <li><a href="{{ url('doctors')}}">Prostate Health</a></li>
                                            <li><a href="{{ url('doctors')}}">Kidney Stone Management</a></li>
                                            <li><a href="{{ url('doctors')}}">Bladder Issues</a></li>
                                            <li><a href="{{ url('doctors')}}">Male Sexual Health</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Endocrinology -->
                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse" data-target="#collapseTwelve"
                                    style="cursor: pointer;">
                                    Endocrinology
                                </div>
                                <div id="collapseTwelve" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="{{ url('doctors')}}">Diabetes Management</a></li>
                                            <li><a href="{{ url('doctors')}}">Thyroid Disorders</a></li>
                                            <li><a href="{{ url('doctors')}}">Hormonal Imbalances</a></li>
                                            <li><a href="{{ url('doctors')}}">Metabolic Syndrome</a></li>
                                            <li><a href="{{ url('doctors')}}">Weight Management Support</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Neurology -->
                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse" data-target="#collapseThirteen"
                                    style="cursor: pointer;">
                                    Neurology
                                </div>
                                <div id="collapseThirteen" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="{{ url('doctors')}}">Migraine & Headache Treatment</a></li>
                                            <li><a href="{{ url('doctors')}}">Seizure Disorders</a></li>
                                            <li><a href="{{ url('doctors')}}">Neuropathy Evaluation</a></li>
                                            <li><a href="{{ url('doctors')}}">Stroke Recovery Support</a></li>
                                            <li><a href="{{ url('doctors')}}">Parkinson's Disease Care</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Immunizations -->
                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse" data-target="#collapseFourteen"
                                    style="cursor: pointer;">
                                    Immunizations
                                </div>
                                <div id="collapseFourteen" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="{{ url('doctors')}}">Routine Childhood Vaccinations</a></li>
                                            <li><a href="{{ url('doctors')}}">Adult Booster Shots</a></li>
                                            <li><a href="{{ url('doctors')}}">Travel Vaccines</a></li>
                                            <li><a href="{{ url('doctors')}}">Flu Shots</a></li>
                                            <li><a href="{{ url('doctors')}}">COVID-19 Vaccines</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Physical Therapy -->
                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse" data-target="#collapseFifteen"
                                    style="cursor: pointer;">
                                    Physical Therapy
                                </div>
                                <div id="collapseFifteen" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="{{ url('doctors')}}">Post-surgical Rehabilitation</a></li>
                                            <li><a href="{{ url('doctors')}}">Chronic Pain Management</a></li>
                                            <li><a href="{{ url('doctors')}}">Mobility & Strength Training</a></li>
                                            <li><a href="{{ url('doctors')}}">Workplace Injury Recovery</a></li>
                                            <li><a href="{{ url('doctors')}}">Balance & Fall Prevention</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="section-title">
                <span>Specialists</span>
                <h2>Our Top Expert Doctors</h2>
            </div>
        </div>

        <div class="row">
            <!-- Doctor 1 -->
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <!-- Doctor Image + Name -->
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-1.jpg" alt="Dr. Laura Leon">
                        <h5>Dr. Laura Leon</h5>
                        <span>Plastic Surgeon</span>

                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            Dedicated to patient-centered care, Dr. Liane excels in body contouring and safe outcomes
                        </p>

                        <!-- Star Rating -->
                        <div style="color: #FFD700; margin-top: 5px; margin-bottom: 10px;">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>

                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>

                        <a href="{{ url('doctor-details-3')}}" class="primary-btn mt-3">consult Dr.Liane</a>
                    </div>
                </div>
            </div>
            <!-- Doctor 2 -->

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <!-- Doctor Image + Name -->
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-3.jpg" alt="Dr. John Doe">
                        <h5>Dr. John Doe</h5>
                        <span>Plastic Surgeon</span>

                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            Dedicated to patient-centered care, Dr. John Doe excels in body contouring and safe outcomes
                        </p>

                        <!-- Star Rating -->
                        <div style="color: #FFD700; margin-top: 5px; margin-bottom: 10px;">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>

                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>

                        <a href="{{ url('doctor-details-1')}}" class="primary-btn mt-3">consult Dr.John</a>
                    </div>
                </div>
            </div>

            <!-- Doctor 3 -->

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="pricing__item">
                    <!-- Doctor Image + Name -->
                    <div class="team__item" style="margin-bottom: 20px;">
                        <img src="/assets-site/img/team/team-2.jpg" alt="Dr. Manuel Benet">
                        <h5>Dr. Manuel Benet</h5>
                        <span>Plastic Surgeon</span>

                        <p style="margin-top: 10px; font-size: 14px; color: #555;">
                            Dedicated to patient-centered care, Dr. Liane excels in body contouring and safe outcomes
                        </p>

                        <!-- Star Rating -->
                        <div style="color: #FFD700; margin-top: 5px; margin-bottom: 10px;">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>

                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>

                        <a href="{{ url('doctor-details-2')}}" class="primary-btn mt-3">consult Dr.Manuel</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-12" style="text-align: center; margin-bottom: 30px;">
                <div class="latest__btn" style="display: inline-block;">
                    <a href="{{ url('doctors')}} " class="primary-btn">View all doctors</a>
                </div>
            </div>

        </div>
    </div>


</div>
</section>

<!-- Team Section End -->

@include('Site.layouts.footer')