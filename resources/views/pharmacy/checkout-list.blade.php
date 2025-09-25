@include('layouts.header')

<body>
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

                <!-- / Navbar -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <div id="wizard-checkout" class="bs-stepper wizard-icons wizard-icons-example mt-2">

                        <form id="wizard-checkout-form" onSubmit="return false">
                            <!-- Cart -->
                            <div id="checkout-cart" class="content">
                                <div class="row">
                                    <div class="col-xl-8 mb-3 mb-xl-0 mt-4">
                                        <ul class="list-group mb-3">
                                            <li class="list-group-item p-4">
                                                <div class="gap-3 d-flex">
                                                    <div class="flex-shrink-0">
                                                        <img src="/assets-site/img/team/product1.jpg" alt="google home"
                                                            class="w-px-100" />
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <h6 class="fw-normal me-3 mb-2">
                                                                    <a href="javascript:void(0)"
                                                                        class="text-body">Google - Google Home -
                                                                        White</a>
                                                                </h6>
                                                                <div class="d-flex flex-wrap text-muted mb-1">
                                                                    <span class="me-1">Sold by:</span>
                                                                    <a href="javascript:void(0)" class="me-1">Apple</a>
                                                                    <span class="badge bg-label-success">In
                                                                        Stock</span>
                                                                </div>
                                                                <div class="read-only-ratings mb-2"
                                                                    data-rateyo-read-only="true"></div>
                                                                <input type="number"
                                                                    class="form-control form-control-sm w-px-75"
                                                                    value="1" min="1" max="5" />
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="text-md-end">
                                                                    <button type="button" class="btn-close btn-pinned"
                                                                        aria-label="Close"></button>
                                                                    <div class="my-2 my-md-4">
                                                                        <span class="text-primary">Shs55000/</span><s
                                                                            class="text-muted">Shs70000</s>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item p-4">
                                                <div class="gap-3 d-flex">
                                                    <div class="flex-shrink-0">
                                                        <img src="/assets-site/img/team/product6.jpg" alt="google home"
                                                            class="w-px-100" />
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <h6 class="fw-normal me-3 mb-2">
                                                                    <a href="javascript:void(0)" class="text-body">Apple
                                                                        iPhone 11 (64GB,
                                                                        Black)</a>
                                                                </h6>
                                                                <div class="d-flex flex-wrap text-muted mb-1">
                                                                    <span class="me-1">Sold by:</span>
                                                                    <a href="javascript:void(0)" class="me-1">Apple</a>
                                                                    <span class="badge bg-label-success">In
                                                                        Stock</span>
                                                                </div>
                                                                <div class="read-only-ratings mb-2"
                                                                    data-rateyo-read-only="true"></div>
                                                                <input type="number"
                                                                    class="form-control form-control-sm w-px-75"
                                                                    value="1" min="1" max="5" />
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="text-md-end">
                                                                    <button type="button" class="btn-close btn-pinned"
                                                                        aria-label="Close"></button>
                                                                    <div class="my-2 my-md-4">
                                                                        <span class="text-primary">Shs55000/</span><s
                                                                            class="text-muted">Shs70000</s>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item p-4">
                                                <div class="gap-3 d-flex">
                                                    <div class="flex-shrink-0">
                                                        <img src="/assets-site/img/team/product2.jpg" alt="google home"
                                                            class="w-px-100" />
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <h6 class="fw-normal me-3 mb-2">
                                                                    <a href="javascript:void(0)"
                                                                        class="text-body">Google - Google Home -
                                                                        White</a>
                                                                </h6>
                                                                <div class="d-flex flex-wrap text-muted mb-1">
                                                                    <span class="me-1">Sold by:</span>
                                                                    <a href="javascript:void(0)" class="me-1">Apple</a>
                                                                    <span class="badge bg-label-success">In
                                                                        Stock</span>
                                                                </div>
                                                                <div class="read-only-ratings mb-2"
                                                                    data-rateyo-read-only="true"></div>
                                                                <input type="number"
                                                                    class="form-control form-control-sm w-px-75"
                                                                    value="1" min="1" max="5" />
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="text-md-end">
                                                                    <button type="button" class="btn-close btn-pinned"
                                                                        aria-label="Close"></button>
                                                                    <div class="my-2 my-md-4">
                                                                        <span class="text-primary">Shs55000/</span><s
                                                                            class="text-muted">Shs70000</s>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item p-4">
                                                <div class="gap-3 d-flex">
                                                    <div class="flex-shrink-0">
                                                        <img src="/assets-site/img/team/product7.jpg" alt="google home"
                                                            class="w-px-100" />
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <h6 class="fw-normal me-3 mb-2">
                                                                    <a href="javascript:void(0)" class="text-body">Apple
                                                                        iPhone 11 (64GB,
                                                                        Black)</a>
                                                                </h6>
                                                                <div class="d-flex flex-wrap text-muted mb-1">
                                                                    <span class="me-1">Sold by:</span>
                                                                    <a href="javascript:void(0)" class="me-1">Apple</a>
                                                                    <span class="badge bg-label-success">In
                                                                        Stock</span>
                                                                </div>
                                                                <div class="read-only-ratings mb-2"
                                                                    data-rateyo-read-only="true"></div>
                                                                <input type="number"
                                                                    class="form-control form-control-sm w-px-75"
                                                                    value="1" min="1" max="5" />
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="text-md-end">
                                                                    <button type="button" class="btn-close btn-pinned"
                                                                        aria-label="Close"></button>
                                                                    <div class="my-2 my-md-4">
                                                                        <span class="text-primary">Shs55000/</span><s
                                                                            class="text-muted">Shs70000</s>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item p-4">
                                                <div class="gap-3 d-flex">
                                                    <div class="flex-shrink-0">
                                                        <img src="/assets-site/img/team/product3.jpg" alt="google home"
                                                            class="w-px-100" />
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <h6 class="fw-normal me-3 mb-2">
                                                                    <a href="javascript:void(0)"
                                                                        class="text-body">Google - Google Home -
                                                                        White</a>
                                                                </h6>
                                                                <div class="d-flex flex-wrap text-muted mb-1">
                                                                    <span class="me-1">Sold by:</span>
                                                                    <a href="javascript:void(0)" class="me-1">Apple</a>
                                                                    <span class="badge bg-label-success">In
                                                                        Stock</span>
                                                                </div>
                                                                <div class="read-only-ratings mb-2"
                                                                    data-rateyo-read-only="true"></div>
                                                                <input type="number"
                                                                    class="form-control form-control-sm w-px-75"
                                                                    value="1" min="1" max="5" />
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="text-md-end">
                                                                    <button type="button" class="btn-close btn-pinned"
                                                                        aria-label="Close"></button>
                                                                    <div class="my-2 my-md-4">
                                                                        <span class="text-primary">Shs55000/</span><s
                                                                            class="text-muted">Shs70000</s>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item p-4">
                                                <div class="gap-3 d-flex">
                                                    <div class="flex-shrink-0">
                                                        <img src="/assets-site/img/team/product8.jpg" alt="google home"
                                                            class="w-px-100" />
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <h6 class="fw-normal me-3 mb-2">
                                                                    <a href="javascript:void(0)" class="text-body">Apple
                                                                        iPhone 11 (64GB,
                                                                        Black)</a>
                                                                </h6>
                                                                <div class="d-flex flex-wrap text-muted mb-1">
                                                                    <span class="me-1">Sold by:</span>
                                                                    <a href="javascript:void(0)" class="me-1">Apple</a>
                                                                    <span class="badge bg-label-success">In
                                                                        Stock</span>
                                                                </div>
                                                                <div class="read-only-ratings mb-2"
                                                                    data-rateyo-read-only="true"></div>
                                                                <input type="number"
                                                                    class="form-control form-control-sm w-px-75"
                                                                    value="1" min="1" max="5" />
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="text-md-end">
                                                                    <button type="button" class="btn-close btn-pinned"
                                                                        aria-label="Close"></button>
                                                                    <div class="my-2 my-md-4">
                                                                        <span class="text-primary">Shs55000/</span><s
                                                                            class="text-muted">Shs70000</s>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="border rounded p-3 mb-3  mt-4">
                                            <!-- Estimated Delivery -->
                                            <h6>Products Summary</h6>
                                            <ul class="list-unstyled">
                                                <li class="gap-3 d-flex">
                                                    <div class="flex-shrink-0">
                                                        <img src="/assets-site/img/team/product4.jpg" alt="google home"
                                                            class="w-px-50" />
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0">
                                                            <a class="text-body" href="javascript:void(0)">Google -
                                                                Google Home - White</a>
                                                        </p>
                                                        <p class="fw-semibold">18th Nov 2021</p>
                                                    </div>
                                                </li>
                                                <li class="gap-3 d-flex">
                                                    <div class="flex-shrink-0">
                                                        <img src="/assets-site/img/team/product1.jpg" alt="google home"
                                                            class="w-px-50" />
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0">
                                                            <a class="text-body" href="javascript:void(0)">Apple
                                                                iPhone 11 (64GB, Black)</a>
                                                        </p>
                                                        <p class="fw-semibold">20th Nov 2021</p>
                                                    </div>
                                                </li>
                                                <li class="gap-3 d-flex">
                                                    <div class="flex-shrink-0">
                                                        <img src="/assets-site/img/team/product5.jpg" alt="google home"
                                                            class="w-px-50" />
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0">
                                                            <a class="text-body" href="javascript:void(0)">Google -
                                                                Google Home - White</a>
                                                        </p>
                                                        <p class="fw-semibold">18th Nov 2021</p>
                                                    </div>
                                                </li>
                                                <li class="gap-3 d-flex">
                                                    <div class="flex-shrink-0">
                                                        <img src="/assets-site/img/team/product1.jpg" alt="google home"
                                                            class="w-px-50" />
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0">
                                                            <a class="text-body" href="javascript:void(0)">Apple
                                                                iPhone 11 (64GB, Black)</a>
                                                        </p>
                                                        <p class="fw-semibold">20th Nov 2021</p>
                                                    </div>
                                                </li>
                                                <li class="gap-3 d-flex">
                                                    <div class="flex-shrink-0">
                                                        <img src="/assets-site/img/team/product6.jpg" alt="google home"
                                                            class="w-px-50" />
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0">
                                                            <a class="text-body" href="javascript:void(0)">Google -
                                                                Google Home - White</a>
                                                        </p>
                                                        <p class="fw-semibold">18th Nov 2021</p>
                                                    </div>
                                                </li>
                                                <li class="gap-3 d-flex">
                                                    <div class="flex-shrink-0">
                                                        <img src="/assets-site/img/team/product1.jpg" alt="google home"
                                                            class="w-px-50" />
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <p class="mb-0">
                                                            <a class="text-body" href="javascript:void(0)">Apple
                                                                iPhone 11 (64GB, Black)</a>
                                                        </p>
                                                        <p class="fw-semibold">20th Nov 2021</p>
                                                    </div>
                                                </li>
                                            </ul>

                                            <hr class="mx-n3" />

                                            <!-- Price Details -->
                                            <h6>Price Details</h6>
                                            <dl class="row mb-0">
                                                <dt class="col-6 fw-normal">Order Total</dt>
                                                <dd class="col-6 text-end">$1100.00</dd>

                                                <dt class="col-6 fw-normal">Delivery Charges</dt>
                                                <dd class="col-6 text-end">
                                                    <s>$5.00</s> <span class="badge bg-label-success">Free</span>
                                                </dd>

                                                <hr />

                                                <dt class="col-6">Total</dt>
                                                <dd class="col-6 text-end fw-semibold mb-0">$1100.00</dd>
                                            </dl>
                                        </div>
                                        <div class="d-grid">
                                            <button class="btn btn-primary btn-next">Place Order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                @include('layouts.footer')