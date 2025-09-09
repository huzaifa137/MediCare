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

<script src="https://cdn.tailwindcss.com"></script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

    body {
        font-family: 'Inter', sans-serif;
    }
</style>

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
                        <img src="/assets-site/img/doctor/doctor-3.jpg" alt="Dr Emili Craythorne">
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
                            <a id="open-modal-btn" href="#"
                                class="inline-block px-4 py-2 text-base font-normal text-white bg-gradient-to-r from-blue-500 to-blue-600 rounded border border-transparent hover:from-blue-600 hover:to-blue-700 transition duration-300 transform hover:scale-105 ml-2 mt-4">
                                Talk to Dr. Emili
                            </a><a href="/cv/emili-craythorne.pdf" class="btn btn-outline-secondary ml-2"
                                target="_blank">Download CV</a>
                        </div>

                        <!-- Social Links -->
                        <div class="doctor__item__social mt-4">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </div>

                        <!-- Modal Overlay and Container -->
                        <div id="payment-modal" class="fixed inset-0 z-50 overflow-y-auto hidden">
                            <!-- Modal Backdrop -->
                            <div class="fixed inset-0 bg-gray-900 bg-opacity-75 transition-opacity duration-300"
                                aria-hidden="true"></div>

                            <!-- Modal Panel -->
                            <div class="flex items-center justify-center min-h-screen p-4 sm:p-6">
                                <div class="bg-white rounded-3xl shadow-2xl overflow-hidden transform transition-all duration-300 max-w-lg w-full scale-95 opacity-0"
                                    id="modal-content">
                                    <div class="p-8 sm:p-10">
                                        <div class="flex justify-between items-center mb-6">
                                            <h3 class="text-2xl font-bold text-gray-900">Payment Details</h3>
                                            <button id="close-modal-btn"
                                                class="text-gray-400 hover:text-gray-600 transition duration-200">
                                                <svg class="h-6 w-6" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                        </div>

                                        <div class="mb-6">
                                            <p class="text-sm font-semibold text-gray-600 mb-2">Consultation Fee</p>
                                            <p class="text-3xl font-extrabold text-blue-600">$50.00</p>
                                        </div>

                                        <form>
                                            <div class="mb-4">
                                                <label for="card-number"
                                                    class="block text-sm font-medium text-gray-700 mb-2">Card
                                                    Number</label>
                                                <input type="text" id="card-number"
                                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                                                    placeholder="•••• •••• •••• ••••">
                                            </div>

                                            <div class="grid grid-cols-2 gap-4 mb-6">
                                                <div>
                                                    <label for="expiry-date"
                                                        class="block text-sm font-medium text-gray-700 mb-2">Expiry
                                                        Date</label>
                                                    <input type="text" id="expiry-date"
                                                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                                                        placeholder="MM/YY">
                                                </div>
                                                <div>
                                                    <label for="cvc"
                                                        class="block text-sm font-medium text-gray-700 mb-2">CVC</label>
                                                    <input type="text" id="cvc"
                                                        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                                                        placeholder="•••">
                                                </div>
                                            </div>

                                            <div class="mb-6">
                                                <label for="card-name"
                                                    class="block text-sm font-medium text-gray-700 mb-2">Name on
                                                    Card</label>
                                                <input type="text" id="card-name"
                                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200"
                                                    placeholder="Full Name">
                                            </div>

                                            <button type="submit"
                                                class="w-full px-6 py-4 text-lg font-semibold text-white bg-gradient-to-r from-green-500 to-green-600 rounded-lg shadow-lg hover:from-green-600 hover:to-green-700 transition duration-300 transform hover:scale-105">
                                                Pay Now
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            const openModalBtn = document.getElementById('open-modal-btn');
                            const closeModalBtn = document.getElementById('close-modal-btn');
                            const paymentModal = document.getElementById('payment-modal');
                            const modalContent = document.getElementById('modal-content');

                            // Function to show the modal with animation
                            const showModal = () => {
                                paymentModal.classList.remove('hidden');
                                setTimeout(() => {
                                    modalContent.classList.remove('scale-95', 'opacity-0');
                                    modalContent.classList.add('scale-100', 'opacity-100');
                                }, 10);
                            };

                            // Function to hide the modal with animation
                            const hideModal = () => {
                                modalContent.classList.remove('scale-100', 'opacity-100');
                                modalContent.classList.add('scale-95', 'opacity-0');
                                setTimeout(() => {
                                    paymentModal.classList.add('hidden');
                                }, 300); // Duration matches the transition duration
                            };

                            // Event listeners
                            openModalBtn.addEventListener('click', (event) => {
                                event.preventDefault(); // Prevent the default link behavior
                                showModal();
                            });

                            closeModalBtn.addEventListener('click', hideModal);

                            // Close modal when clicking outside of it
                            paymentModal.addEventListener('click', (event) => {
                                if (event.target === paymentModal) {
                                    hideModal();
                                }
                            });

                            // Hide modal on Escape key press
                            document.addEventListener('keydown', (event) => {
                                if (event.key === 'Escape') {
                                    hideModal();
                                }
                            });
                        </script>

                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<!-- Doctor Section End -->

@include('Site.layouts.footer')