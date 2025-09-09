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
        
<!-- Services Section Begin -->
<section class="services-page spad">
    <div class="container">
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

                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse"
                                    data-target="#collapseTwo" style="cursor: pointer;">
                                    Mental Health
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

                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse"
                                    data-target="#collapseThree" style="cursor: pointer;">
                                    Women's Health
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
                                <div class="card-heading" style="color: gray" data-toggle="collapse"
                                    data-target="#collapseFour" style="cursor: pointer;">
                                    Dermatology
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
                                <div class="card-heading" style="color: gray" data-toggle="collapse"
                                    data-target="#collapseFive" style="cursor: pointer;">
                                    Diagnostic Services
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

                            <!-- Cardiology -->
                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse"
                                    data-target="#collapseSix" style="cursor: pointer;">
                                    Cardiology
                                </div>
                                <div id="collapseSix" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">Heart Health Assessments</a></li>
                                            <li><a href="#">Hypertension Management</a></li>
                                            <li><a href="#">ECG/EKG Review</a></li>
                                            <li><a href="#">Cholesterol Monitoring</a></li>
                                            <li><a href="#">Post-Cardiac Event Follow-up</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Pediatrics -->
                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse"
                                    data-target="#collapseSeven" style="cursor: pointer;">
                                    Pediatrics
                                </div>
                                <div id="collapseSeven" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">Newborn Checkups</a></li>
                                            <li><a href="#">Vaccination Schedules</a></li>
                                            <li><a href="#">Growth & Development Tracking</a></li>
                                            <li><a href="#">Common Childhood Illnesses</a></li>
                                            <li><a href="#">Nutritional Advice for Children</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Orthopedics -->
                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse"
                                    data-target="#collapseEight" style="cursor: pointer;">
                                    Orthopedics
                                </div>
                                <div id="collapseEight" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">Joint Pain Evaluation</a></li>
                                            <li><a href="#">Back & Spine Consultations</a></li>
                                            <li><a href="#">Fracture Management</a></li>
                                            <li><a href="#">Arthritis Treatment</a></li>
                                            <li><a href="#">Sports Injuries</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- ENT (Ear, Nose, Throat) -->
                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse"
                                    data-target="#collapseNine" style="cursor: pointer;">
                                    ENT (Ear, Nose & Throat)
                                </div>
                                <div id="collapseNine" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">Sinusitis Treatment</a></li>
                                            <li><a href="#">Ear Infections</a></li>
                                            <li><a href="#">Throat Irritation</a></li>
                                            <li><a href="#">Hearing Assessments</a></li>
                                            <li><a href="#">Allergy-related ENT Issues</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Gastroenterology -->
                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse"
                                    data-target="#collapseTen" style="cursor: pointer;">
                                    Gastroenterology
                                </div>
                                <div id="collapseTen" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">Acid Reflux & GERD</a></li>
                                            <li><a href="#">IBS Management</a></li>
                                            <li><a href="#">Liver Function Monitoring</a></li>
                                            <li><a href="#">Constipation & Diarrhea</a></li>
                                            <li><a href="#">Digestive Health Checkups</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Urology -->
                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse"
                                    data-target="#collapseEleven" style="cursor: pointer;">
                                    Urology
                                </div>
                                <div id="collapseEleven" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">Urinary Tract Infections</a></li>
                                            <li><a href="#">Prostate Health</a></li>
                                            <li><a href="#">Kidney Stone Management</a></li>
                                            <li><a href="#">Bladder Issues</a></li>
                                            <li><a href="#">Male Sexual Health</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Endocrinology -->
                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse"
                                    data-target="#collapseTwelve" style="cursor: pointer;">
                                    Endocrinology
                                </div>
                                <div id="collapseTwelve" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">Diabetes Management</a></li>
                                            <li><a href="#">Thyroid Disorders</a></li>
                                            <li><a href="#">Hormonal Imbalances</a></li>
                                            <li><a href="#">Metabolic Syndrome</a></li>
                                            <li><a href="#">Weight Management Support</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Neurology -->
                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse"
                                    data-target="#collapseThirteen" style="cursor: pointer;">
                                    Neurology
                                </div>
                                <div id="collapseThirteen" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">Migraine & Headache Treatment</a></li>
                                            <li><a href="#">Seizure Disorders</a></li>
                                            <li><a href="#">Neuropathy Evaluation</a></li>
                                            <li><a href="#">Stroke Recovery Support</a></li>
                                            <li><a href="#">Parkinson's Disease Care</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Immunizations -->
                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse"
                                    data-target="#collapseFourteen" style="cursor: pointer;">
                                    Immunizations
                                </div>
                                <div id="collapseFourteen" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">Routine Childhood Vaccinations</a></li>
                                            <li><a href="#">Adult Booster Shots</a></li>
                                            <li><a href="#">Travel Vaccines</a></li>
                                            <li><a href="#">Flu Shots</a></li>
                                            <li><a href="#">COVID-19 Vaccines</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Physical Therapy -->
                            <div class="card">
                                <div class="card-heading" style="color: gray" data-toggle="collapse"
                                    data-target="#collapseFifteen" style="cursor: pointer;">
                                    Physical Therapy
                                </div>
                                <div id="collapseFifteen" class="collapse" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="#">Post-surgical Rehabilitation</a></li>
                                            <li><a href="#">Chronic Pain Management</a></li>
                                            <li><a href="#">Mobility & Strength Training</a></li>
                                            <li><a href="#">Workplace Injury Recovery</a></li>
                                            <li><a href="#">Balance & Fall Prevention</a></li>
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