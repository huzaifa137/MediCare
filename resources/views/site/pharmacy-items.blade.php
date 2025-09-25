@include('Site.layouts.header')

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option spad set-bg" data-setbg="/assets-site/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Shop from our top Pharmacies</h2>
                    <div class="breadcrumb__links">
                        <a href="{{ url('index') }}">Home</a>
                        <span>Pharmacies</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->
{{--
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> --}}

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

    body {
        font-family: 'Inter', sans-serif;
        background-color: #f8f9fa;
    }

    .section-title h2 {
        font-weight: 700;
        color: #212529;
    }

    .card-elegant {
        border: none;
        border-radius: 1.25rem;
        transition: all 0.3s ease;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        overflow: hidden;
    }

    .card-elegant:hover {
        box-shadow: 0 15px 45px rgba(0, 0, 0, 0.15);
        transform: translateY(-5px);
    }

    .card-image-container {
        height: 250px;
        overflow: hidden;
    }

    .card-img-top {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .card-elegant:hover .card-img-top {
        transform: scale(1.05);
    }

    .card-body {
        padding: 1.5rem;
        text-align: center;
    }

    .product-title {
        font-weight: 600;
        font-size: 1.25rem;
        color: #343a40;
        margin-bottom: 0.5rem;
    }

    .product-description {
        color: #6c757d;
        font-size: 0.9rem;
        margin-bottom: 0.75rem;
    }

    .product-price {
        font-size: 1.5rem;
        font-weight: 700;
        color: #007bff;
    }

    .rating-stars {
        color: #ffc107;
        font-size: 1.1rem;
    }

    .btn-elegant {
        border-radius: 50px;
        font-weight: 600;
        padding: 0.75rem 2rem;
        transition: all 0.3s ease;
    }

    .btn-primary {
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-primary:hover {
        background-color: #218838;
        border-color: #1e7e34;
        transform: translateY(-2px);
    }

    .btn-outline-secondary {
        color: #6c757d;
        border-color: #6c757d;
    }

    .btn-outline-secondary:hover {
        background-color: #6c757d;
        color: #fff;
    }

    /* Custom badges */
    .badge-pill-custom {
        padding: 0.5em 1.2em;
        border-radius: 50px;
        font-weight: 500;
        font-size: 0.8rem;
    }
</style>


<section class="pricing spad">

    <div class="container">
        <h2 class="text-center mb-5"> Medicines 🩺</h2>
    </div>

    <div class="container product-section">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card card-elegant h-100">
                    <div class="card-image-container">
                        <img src="/assets-site/img/team/product1.jpg" class="card-img-top" alt="Pharmacy Product 1">
                    </div>
                    <div class="card-body">
                        <h5 class="product-title">Premium Vitamins</h5>
                        <p class="product-description">Essential daily supplements for a healthier you.</p>
                        <div class="d-flex justify-content-center mb-3">
                            <span class="badge bg-success badge-pill-custom">Top Rated</span>
                        </div>
                        <p class="product-price mb-3">$49.99</p>
                        <div class="rating-stars mb-3">
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star-half-alt text-warning"></span>
                        </div>
                         <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-elegant w-100 mt-2">
                            <i class="fa fa-shopping-cart me-2"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card card-elegant h-100">
                    <div class="card-image-container">
                        <img src="/assets-site/img/team/product2.jpg" class="card-img-top" alt="Pharmacy Product 2">
                    </div>
                    <div class="card-body">
                        <h5 class="product-title">Herbal Teas</h5>
                        <p class="product-description">A soothing blend for relaxation and well-being.</p>
                        <div class="d-flex justify-content-center mb-3">
                            <span class="badge bg-warning badge-pill-custom">Popular</span>
                        </div>
                        <p class="product-price mb-3">$29.99</p>
                        <div class="rating-stars mb-3">
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star-half-alt text-warning"></span>
                        </div>
                         <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-elegant w-100 mt-2">
                            <i class="fa fa-shopping-cart me-2"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card card-elegant h-100">
                    <div class="card-image-container">
                        <img src="/assets-site/img/team/product3.jpg" class="card-img-top" alt="Pharmacy Product 3">
                    </div>
                    <div class="card-body">
                        <h5 class="product-title">Organic Skincare</h5>
                        <p class="product-description">Nourishing and gentle for all skin types.</p>
                        <div class="d-flex justify-content-center mb-3">
                            <span class="badge bg-danger badge-pill-custom">Limited Stock</span>
                        </div>
                        <p class="product-price mb-3">$19.99</p>
                        <div class="rating-stars mb-3">
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star-half-alt text-warning"></span>
                        </div>
                         <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-elegant w-100 mt-2">
                            <i class="fa fa-shopping-cart me-2"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card card-elegant h-100">
                    <div class="card-image-container">
                        <img src="/assets-site/img/team/product4.jpg" class="card-img-top" alt="Pharmacy Product 4">
                    </div>
                    <div class="card-body">
                        <h5 class="product-title">Aromatherapy Diffuser</h5>
                        <p class="product-description">Create a calming and serene environment.</p>
                        <div class="d-flex justify-content-center mb-3">
                            <span class="badge bg-info badge-pill-custom">Best Seller</span>
                        </div>
                        <p class="product-price mb-3">$39.99</p>
                        <div class="rating-stars mb-3">
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star-half-alt text-warning"></span>
                        </div>
                         <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-elegant w-100 mt-2">
                            <i class="fa fa-shopping-cart me-2"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                <div class="card card-elegant h-100">
                    <div class="card-image-container">
                        <img src="/assets-site/img/team/product5.jpg" class="card-img-top" alt="Pharmacy Product 5">
                    </div>
                    <div class="card-body">
                        <h5 class="product-title">Relief Balm</h5>
                        <p class="product-description">Soothes aches and muscle discomfort.</p>
                        <div class="d-flex justify-content-center mb-3">
                            <span class="badge bg-secondary badge-pill-custom">New Arrival</span>
                        </div>
                        <p class="product-price mb-3">$24.99</p>
                        <div class="rating-stars mb-3">
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star-half-alt text-warning"></span>
                        </div>
                        <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-elegant w-100 mt-2">
                            <i class="fa fa-shopping-cart me-2"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                <div class="card card-elegant h-100">
                    <div class="card-image-container">
                        <img src="/assets-site/img/team/product6.jpg" class="card-img-top" alt="Pharmacy Product 1">
                    </div>
                    <div class="card-body">
                        <h5 class="product-title">Premium Vitamins</h5>
                        <p class="product-description">Essential daily supplements for a healthier you.</p>
                        <div class="d-flex justify-content-center mb-3">
                            <span class="badge bg-success badge-pill-custom">Top Rated</span>
                        </div>
                        <p class="product-price mb-3">$49.99</p>
                        <div class="rating-stars mb-3">
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star-half-alt text-warning"></span>
                        </div>
                         <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-elegant w-100 mt-2">
                            <i class="fa fa-shopping-cart me-2"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                <div class="card card-elegant h-100">
                    <div class="card-image-container">
                        <img src="/assets-site/img/team/product7.jpg" class="card-img-top" alt="Pharmacy Product 2">
                    </div>
                    <div class="card-body">
                        <h5 class="product-title">Herbal Teas</h5>
                        <p class="product-description">A soothing blend for relaxation and well-being.</p>
                        <div class="d-flex justify-content-center mb-3">
                            <span class="badge bg-warning badge-pill-custom">Popular</span>
                        </div>
                        <p class="product-price mb-3">$29.99</p>
                        <div class="rating-stars mb-3">
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star-half-alt text-warning"></span>
                        </div>
                         <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-elegant w-100 mt-2">
                            <i class="fa fa-shopping-cart me-2"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                <div class="card card-elegant h-100">
                    <div class="card-image-container">
                        <img src="/assets-site/img/team/product8.jpg" class="card-img-top" alt="Pharmacy Product 3">
                    </div>
                    <div class="card-body">
                        <h5 class="product-title">Organic Skincare</h5>
                        <p class="product-description">Nourishing and gentle for all skin types.</p>
                        <div class="d-flex justify-content-center mb-3">
                            <span class="badge bg-danger badge-pill-custom">Limited Stock</span>
                        </div>
                        <p class="product-price mb-3">$19.99</p>
                        <div class="rating-stars mb-3">
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star text-warning"></span>
                            <span class="fa fa-star-half-alt text-warning"></span>
                        </div>
                         <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-elegant w-100 mt-2">
                            <i class="fa fa-shopping-cart me-2"></i> Add to Cart
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

@include('Site.layouts.footer')