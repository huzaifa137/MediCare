@include('layouts.header')

<body>


    <style>
        @media (min-width: 1200px) {
            .col-lg-1-5 {
                flex: 0 0 20%;
                max-width: 20%;
            }
        }

        .product-section {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            margin-bottom: 3rem;
        }

        .product-section h4 {
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: #2c3e50;
            text-align: left;
        }


        .product-img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
        }
    </style>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            @include('layouts.side-bar-menu')
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                @include('layouts.nav-bar')

                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="product-section">
                        <h4>Medicines In Stock</h4>

                        <div class="row mt-4">
                            <!-- Product 1 -->
                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product6.jpg" alt="Product 1"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i
                                                class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Repeat Product Blocks -->
                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product7.jpg" alt="Product 2"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i
                                                class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>


                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product8.jpg" alt="Product 3"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product6.jpg" alt="Product 1"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Repeat Product Blocks -->
                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product7.jpg" alt="Product 2"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product8.jpg" alt="Product 3"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product6.jpg" alt="Product 1"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Repeat Product Blocks -->
                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product7.jpg" alt="Product 2"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product8.jpg" alt="Product 3"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Product 1 -->
                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product6.jpg" alt="Product 1"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <!-- Product 1 -->
                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product6.jpg" alt="Product 1"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Repeat Product Blocks -->
                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product7.jpg" alt="Product 2"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product8.jpg" alt="Product 3"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product6.jpg" alt="Product 1"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Repeat Product Blocks -->
                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product7.jpg" alt="Product 2"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product8.jpg" alt="Product 3"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product6.jpg" alt="Product 1"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Repeat Product Blocks -->
                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product7.jpg" alt="Product 2"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product8.jpg" alt="Product 3"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Product 1 -->
                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product6.jpg" alt="Product 1"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <!-- Product 1 -->
                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product6.jpg" alt="Product 1"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Repeat Product Blocks -->
                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product7.jpg" alt="Product 2"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product8.jpg" alt="Product 3"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product6.jpg" alt="Product 1"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Repeat Product Blocks -->
                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product7.jpg" alt="Product 2"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product8.jpg" alt="Product 3"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product6.jpg" alt="Product 1"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Repeat Product Blocks -->
                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product7.jpg" alt="Product 2"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product8.jpg" alt="Product 3"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Product 1 -->
                            <div class="col-6 col-md-4 col-lg-1-5 mb-4">
                                <div class="list-group-item p-3 h-100">
                                    <div class="text-center mb-3">
                                        <img src="/assets-site/img/team/product6.jpg" alt="Product 1"
                                            class="product-img" />
                                    </div>
                                    <h6 class="fw-normal mb-2 text-center">
                                        <a href="javascript:void(0)" class="text-body">Apple iPhone 11 (64GB, Black)</a>
                                    </h6>
                                    <div class="d-flex justify-content-center flex-wrap text-muted mb-1 small">
                                        <span class="me-1">Sold by:</span>
                                        <a href="javascript:void(0)" class="me-1">Apple</a>
                                        <span class="badge bg-label-success">In Stock</span>
                                    </div>
                                    <div class="read-only-ratings mb-2 text-center" data-rateyo-read-only="true"></div>
                                    <div class="text-center mb-3">
                                        <span class="text-primary">Shs55000/</span>
                                        <s class="text-muted">Shs70000</s>
                                    </div>
                                    <div class="text-center">
                                                                                <a href="{{ url('pharmacy/checkout-list') }}" class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart me-2"></i>Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                @include('layouts.footer')