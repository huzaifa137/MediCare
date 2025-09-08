@include('Site.layouts.header')

<!-- Blog Details Section Begin -->
<section class="blog-details spad">
    <div class="container">
        <div class="blog__details__hero set-bg" data-setbg="/assets-site/img/blog/details/blog-hero.jpg">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="blog__hero__text">
                        <h2>Achieve a Natural Glow This Season: Expert Tips from Cosmetic Surgeons</h2>
                        <ul>
                            <li><img src="/assets-site/img/blog/blog-author.jpg" alt=""> Dr. John Doe</li>
                            <li>Sep 01, 2025</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="blog__details__social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                </div>

                <div class="blog__details__text">
                    <div class="blog__details__text__item">
                        <h5>Step 1 - Preparing for Radiance</h5>
                        <p>Whether you're attending a wedding, gala, or seasonal celebration, healthy skin is your best
                            accessory. Start by consulting a certified aesthetic specialist to assess your skin type and
                            recommend treatments tailored to your goals — such as hydrafacials, light peels, or
                            injectables.</p>
                    </div>
                    <div class="blog__details__text__item">
                        <h5>Step 2 - Non-Surgical Enhancements</h5>
                        <p>Want subtle definition without downtime? Consider dermal fillers for volume restoration, or
                            Botox to smooth fine lines. These treatments are quick, safe, and deliver natural-looking
                            results — making them perfect before events or holidays.</p>
                    </div>
                </div>

                <div class="blog__details__desc">
                    <p>If you're looking for a more transformative glow, laser resurfacing or microneedling can address
                        texture, pigmentation, and dullness. Results develop over time, so we recommend planning at
                        least 4–6 weeks ahead of any major occasion. Always follow your provider's aftercare advice to
                        maximize your results.</p>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="blog__details__pic">
                    <div class="row">
                        <div class="col-sm-4">
                            <img src="/assets-site/img/blog/details/bd-1.jpg" alt="Facial Treatment Before-After">
                        </div>
                        <div class="col-sm-4">
                            <img src="/assets-site/img/blog/details/bd-2.jpg" alt="Hydrafacial in Clinic">
                        </div>
                        <div class="col-sm-4">
                            <img src="/assets-site/img/blog/details/bd-3.jpg" alt="Skincare Consultation">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="blog__details__desc__more">
                    <p>Looking for a slimmer profile? Non-invasive contouring procedures such as CoolSculpting or
                        Ultherapy can refine your jawline and neck. These services offer noticeable yet subtle
                        improvements — ideal for those seeking confidence without going under the knife.</p>
                </div>

                <div class="blog__details__text">
                    <div class="blog__details__text__item">
                        <h5>Step 3 - Maintain Your Glow</h5>
                        <p>Great skin doesn’t stop at the clinic. Use medical-grade skincare products at home to
                            maintain hydration, enhance skin tone, and prevent premature aging. Our experts can
                            customize a post-treatment regimen for long-lasting luminosity.</p>
                    </div>
                    <div class="blog__details__text__item">
                        <h5>Step 4 - Confidence is Key</h5>
                        <p>True beauty begins with self-confidence. Whether through a small tweak or a big
                            transformation, our goal is to help you feel like the best version of yourself — naturally
                            radiant and camera-ready for any season.</p>
                    </div>
                </div>

                <div class="blog__details__tag">
                    <p><i class="fa fa-tag"></i> Tags:</p>
                    <a href="#">Skin Care</a>
                    <a href="#">Aesthetic Tips</a>
                    <a href="#">Non-Surgical</a>
                </div>

                {{-- <div class="blog__details__btns">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <a href="#" class="blog__details__btn__item">
                                <h6 class="title"><i class="fa fa-angle-left"></i> Previous post</h6>
                                <div class="blog__details__btn__pic">
                                    <img src="/assets-site/img/blog/details/prev.jpg" alt="">
                                </div>
                                <div class="blog__details__btn__text">
                                    <h6>Top Skincare Treatments Recommended by Surgeons</h6>
                                    <span>Aug 24, 2025</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <a href="#" class="blog__details__btn__item blog__details__btn__prev">
                                <h6 class="title">Next post <i class="fa fa-angle-right"></i></h6>
                                <div class="blog__details__btn__pic">
                                    <img src="/assets-site/img/blog/details/next.jpg" alt="">
                                </div>
                                <div class="blog__details__btn__text">
                                    <h6>What to Know Before Your First Cosmetic Procedure</h6>
                                    <span>Sep 10, 2025</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="blog__details__related">
                    <h3>Recent posts</h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="/assets-site/img/blog/blog-8.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <h5><a href="#">Understanding the Body Lift Procedure: What to Expect</a></h5>
                                    <span>Aug 20, 2025</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="/assets-site/img/blog/blog-6.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <h5><a href="#">Neck Lift Surgery: Recovery Tips from Experts</a></h5>
                                    <span>Aug 18, 2025</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="/assets-site/img/blog/blog-9.jpg" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <h5><a href="#">How to Choose the Right Cosmetic Surgery for You</a></h5>
                                    <span>Aug 10, 2025</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="blog__details__comment">
                    <h3>Leave a comment</h3>
                    <form action="javascript:void();">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <input type="text" placeholder="Name">
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <input type="text" placeholder="Email">
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <input type="text" placeholder="Website">
                            </div>
                        </div>
                        <textarea placeholder="Comment"></textarea>
                        <button type="submit" class="site-btn">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Details Section End -->

@include('Site.layouts.footer')