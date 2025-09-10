@include('Site.layouts.header')

<style>
    .services-card {
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        border-radius: 10px;
        overflow: hidden;
    }

    .services-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .services-card .card-img-top {
        border-radius: 10px 10px 0 0;
    }

    .blog__item {
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .blog__item__pic img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.3s ease;
    }

    .blog__item.hover-effect:hover {
        box-shadow: 0 8px 20px rgba(23, 162, 184, 0.3);
        transform: translateY(-5px);
        border-color: #17A2B8;
    }

    .blog__item.hover-effect:hover .blog__item__pic img {
        transform: scale(1.05);
    }

    .blog__item.hover-effect:hover h5 a {
        color: #17A2B8;
        text-decoration: none;
    }
</style>

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
            <div class="col-lg-12 order-lg-2">
                <div class="services__details">
                    <div class="row align-items-start"> <!-- Only one row needed -->

                        <!-- LEFT COLUMN: Image -->
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__details__pic">
                                <img src="{{ asset('assets-site/img/ourservies/' . $serviceImage) }}"
                                    alt="{{ $serviceName }}" width="1248" height="400">
                            </div>
                        </div>

                        <!-- RIGHT COLUMN: Text -->
                        <div class="col-lg-6 col-md-6 col-sm-6 d-flex align-items-start">
                            <div class="services__details__text">
                                <h3 style="text-align:center;">{{$serviceName}}</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua...</p>
                                <p>Aut ipsam consequuntur non rem tenetur dolore consequatur ducimus a labore
                                    excepturi quae nisi, quisquam, maxime voluptates magnam aliquid.</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua...</p>

                                <p>Aut ipsam consequuntur non rem tenetur dolore consequatur ducimus a labore
                                    excepturi quae nisi, quisquam, maxime voluptates magnam aliquid.</p>

                                <p>Aut ipsam consequuntur non rem tenetur dolore consequatur ducimus a labore
                                    excepturi quae nisi, quisquam, maxime voluptates magnam aliquid.</p>
                            </div>
                        </div>

                    </div>

                    <div class="row mt-4">
                        <div class="col-12">
                            <h3 class="text-center" style="color:#007BFF;">Categories under {{ $serviceName }}
                            </h3>
                        </div>
                    </div>

                    <!-- Additional Images Row -->
                    @php
                        $images = [
                            'Cardiology.jpg',
                            'Dermatology.jpg',
                            'DiagnosticServices.jpg',
                            'ENT.jpg',
                            'GeneralConsultantion.jpg',
                            'MentalHealth.jpg',
                            'Orthopedics.jpg',
                            'Pediatrics.jpg',
                            'WomensHealth.jpg',
                        ];

                        shuffle($images);
                        $services = array_slice($images, 0, 6);
                        function formatTitle($filename)
                        {
                            $name = pathinfo($filename, PATHINFO_FILENAME);
                            return preg_replace('/(?<!^)([A-Z])/', ' $1', $name);
                        }

                        function slugifyServiceName($filename)
                        {
                            $name = pathinfo($filename, PATHINFO_FILENAME);
                            $slug = preg_replace('/(?<!^)([A-Z])/', '-$1', $name); // Insert hyphen before each uppercase letter (except the first)
                            return strtolower($slug);
                        }

                    @endphp


                    <div class="row mt-4">
                        @foreach ($services as $img)
                            @php
                                $title = formatTitle($img);           
                                $linkName = slugifyServiceName($img);  
                            @endphp

                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="blog__item hover-effect">
                                    <div class="blog__item__pic">
                                        <a href="{{ url('specific-service-doctors/' . $linkName) }}">
                                            <img src="/assets-site/img/ourservies/{{ $img }}" alt="{{ $title }}">
                                        </a>
                                    </div>
                                    <div class="blog__item__text">
                                        <h5 style="text-align: center;">
                                            <a href="{{ url('specific-service-doctors/' . $linkName) }}">{{ $title }}</a>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>




                </div>
            </div>
        </div>
    </div>

</section>
<!-- Services Section End -->
@include('Site.layouts.footer')