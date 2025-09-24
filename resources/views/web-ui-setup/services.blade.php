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

                <style>
                    .border-dashed {
                        border-style: dashed !important;
                    }

                    .ck-editor__editable {
                        min-height: 300px !important;
                    }

                    .attention-glow {
                        position: relative;
                        /* Essential for positioning the pseudo-element */
                        overflow: hidden;
                        /* Ensures the glow doesn't extend beyond the card's corners */
                        z-index: 1;
                        /* Puts the card content above the glow */
                    }

                    .attention-glow:before {
                        content: '';
                        position: absolute;
                        top: -50%;
                        left: -50%;
                        width: 200%;
                        height: 200%;
                        background: radial-gradient(circle, rgba(255, 0, 0, 0.5) 0%, rgba(255, 0, 0, 0) 70%);
                        transform: rotate(0deg);
                        animation: glow-rotate 3s linear infinite;
                        /* Adjust duration for speed */
                        opacity: 0.5;
                        z-index: -1;
                    }

                    @keyframes glow-rotate {
                        from {
                            transform: rotate(0deg) scale(0.9);
                        }

                        to {
                            transform: rotate(360deg) scale(1.1);
                        }
                    }
                </style>

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4">Our Services</h4>

                        <div class="row g-4 mb-4">

                            <!-- Overall User Stats -->
                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Total Users</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">9</h4>
                                                    <small class="text-success">(All roles)</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-primary rounded p-2">
                                                <i class="bx bx-user bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Admins</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">7</h4>
                                                    <small class="text-info">System Admins</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-secondary rounded p-2">
                                                <i class="bx bx-shield-quarter bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Doctors</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">5</h4>
                                                    <small class="text-success">Registered Doctors</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-success rounded p-2">
                                                <i class="bx bx-user-circle bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-xl-3">
                                <div class="card attention-glow" style="cursor: pointer;" data-bs-toggle="modal"
                                    data-bs-target="#addServiceModal">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="content-left">
                                                <span>Add Service</span>
                                                <div class="d-flex align-items-end mt-2">
                                                    <h4 class="me-2 mb-0">2</h4>
                                                    <small class="text-warning">Active Services</small>
                                                </div>
                                            </div>
                                            <span class="badge bg-label-warning rounded p-2">
                                                <i class="bx bx-plus-medical bx-sm"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-4">
                            @foreach($services as $service)
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="dropdown btn-pinned">
                                                <button type="button" class="btn dropdown-toggle hide-arrow p-0"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a class="dropdown-item text-danger delete-service"
                                                            data-service-id="{{ $service->id }}"
                                                            href="javascript:void(0);">Delete</a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="mx-auto mb-3">
                                                <img src="{{ asset($service->image) }}" alt="{{ $service->title }}"
                                                    class="w-px-100 rounded-circle" />
                                            </div>

                                            <h5 class="card-title mb-1">{{ $service->title }}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Add Service Modal -->
                <div class="modal fade" id="addServiceModal" tabindex="-1" aria-labelledby="addServiceModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data"
                            class="modal-content">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="addServiceModalLabel">Add New Service</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <div class="modal-body row g-3">
                                <!-- Title -->
                                <div class="col-md-12">
                                    <label for="serviceTitle" class="form-label">Service Title</label>
                                    <input type="text" class="form-control" id="serviceTitle" name="title" required>
                                </div>

                                <!-- Image Upload -->
                                <div class="col-md-12">
                                    <label class="form-label">Service Image</label>
                                    <div class="image-upload-box text-center p-4 border border-dashed rounded mb-2"
                                        onclick="document.getElementById('serviceImage').click();"
                                        style="cursor: pointer;">
                                        <img id="serviceImagePreview"
                                            src="https://placehold.co/200x140/94a3b8/e2e8f0?text=Click+to+Upload&font=roboto"
                                            alt="Preview" class="img-fluid rounded" style="max-height: 200px;">
                                        <div class="mt-2 text-muted small">Click to select image</div>
                                    </div>
                                    <input type="file" class="form-control" id="serviceImage" name="image"
                                        accept="image/*" onchange="previewServiceImage(this)" required
                                        style="opacity: 0; position: absolute; z-index: -1;">
                                </div>

                                <!-- Description -->
                                <div class="col-md-12">
                                    <label for="serviceDescription" class="form-label">Brief Description</label>
                                    <!-- Remove display: none so CKEditor can initialize properly -->
                                    <textarea class="form-control" id="serviceDescription" name="description" rows="4"
                                        style="height: 300px;"></textarea>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="bx bx-save me-1"></i> Save Service
                                </button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    <i class="bx bx-x me-1"></i> Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row g-4">
                            @foreach($services as $service)
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <!-- Existing Service Card Content -->

                                            <button class="btn btn-primary add-subcategory"
                                                data-service-id="{{ $service->id }}">
                                                Add Subcategory
                                            </button>

                                            <!-- Subcategories Displayed Below -->
                                            <div id="subcategories-{{ $service->id }}">
                                                @foreach($service->subCategories as $subCategory)
                                                    <div class="subcategory-card">
                                                        <img src="{{ asset('storage/' . $subCategory->image) }}"
                                                            class="rounded-circle" width="100">
                                                        <h5>{{ $subCategory->title }}</h5>
                                                        <p>{{ $subCategory->description }}</p>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Modal for Adding Subcategory -->
                        <div class="modal" id="addSubcategoryModal" tabindex="-1"
                            aria-labelledby="addSubcategoryModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addSubcategoryModalLabel">Add Subcategory</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="subCategoryForm">
                                            @csrf
                                            <input type="hidden" name="service_category_id" id="service_category_id">
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input type="text" class="form-control" id="title" name="title">
                                            </div>
                                            <div class="mb-3">
                                                <label for="description" class="form-label">Description</label>
                                                <textarea class="form-control" id="description"
                                                    name="description"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Image</label>
                                                <input type="file" class="form-control" id="image" name="image">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" id="saveSubCategory">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                <script>
                    $(document).ready(function () {
                        // Open modal when "Add Subcategory" is clicked
                        $('.add-subcategory').click(function () {
                            var serviceId = $(this).data('service-id');
                            $('#service_category_id').val(serviceId);
                            $('#addSubcategoryModal').modal('show');
                        });

                        // Handle form submission for adding subcategory
                        $('#saveSubCategory').click(function () {
                            var formData = new FormData($('#subCategoryForm')[0]);

                            $.ajax({
                                url: '/web-ui/service/' + $('#service_category_id').val() + '/subcategory',
                                type: 'POST',
                                data: formData,
                                processData: false,
                                contentType: false,
                                success: function (response) {
                                    if (response.success) {
                                        $('#addSubcategoryModal').modal('hide');
                                        Swal.fire('Success', 'Subcategory added!', 'success');

                                        // Append new subcategory card dynamically
                                        var newSubCategory = `
                        <div class="subcategory-card">
                            <img src="${response.subCategory.image}" class="rounded-circle" width="100">
                            <h5>${response.subCategory.title}</h5>
                            <p>${response.subCategory.description}</p>
                        </div>
                    `;
                                        $('#subcategories-' + $('#service_category_id').val()).append(newSubCategory);
                                    } else {
                                        Swal.fire('Error', 'Failed to add subcategory!', 'error');
                                    }
                                },
                                // error: function () {
                                //     Swal.fire('Error', 'There was an issue saving the subcategory!', 'error');
                                // }
                                error: function (data) {
                                    $('body').html(data.responseText);
                                }
                            });
                        });
                    });

                </script>

                <script>
                    $(document).ready(function () {
                        $('.delete-service').click(function () {
                            var serviceId = $(this).data('service-id');

                            Swal.fire({
                                title: 'Are you sure?',
                                text: 'Do you want to delete this service?',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, delete it!',
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    $.ajax({
                                        url: '/web-ui/service/' + serviceId,
                                        type: 'DELETE',
                                        data: {
                                            _token: '{{ csrf_token() }}',
                                        },
                                        success: function (response) {
                                            if (response.success) {
                                                Swal.fire('Deleted!', response.message, 'success')
                                                    .then(() => {
                                                        location.reload();
                                                    });
                                            } else {
                                                Swal.fire('Error!', response.message, 'error');
                                            }
                                        },
                                        // error: function () {
                                        //     Swal.fire('Error!', 'There was an error deleting the service.', 'error');
                                        // }
                                        error: function (data) {
                                            $('body').html(data.responseText);
                                        }
                                    });
                                }
                            });
                        });
                    });
                </script>
                <script>
                    let editor; // Declare a variable to hold the editor instance

                    ClassicEditor
                        .create(document.querySelector('#serviceDescription'))
                        .then(newEditor => {
                            editor = newEditor; // Store the editor instance
                            // Set the initial height
                            editor.editing.view.change(writer => {
                                writer.setStyle('height', '300px', editor.editing.view.document.getRoot());
                            });
                        })
                        .catch(error => {
                            console.error(error);
                        });
                </script>

                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                <script>
                    $(document).ready(function () {
                        $('form').submit(function (e) {
                            e.preventDefault(); // Prevent the default form submission

                            var form = $(this)[0];
                            const descriptionData = editor.getData().trim();

                            // 1. First, perform validation
                            if (!form.checkValidity() || !descriptionData) {
                                Swal.fire({
                                    title: 'Validation Error',
                                    text: 'Please fill in all required fields.',
                                    icon: 'warning',
                                    confirmButtonText: 'OK',
                                    customClass: {
                                        container: 'swal-modal-zindex' // Add custom class
                                    }
                                });
                                form.classList.add('was-validated');
                                return; // Stop submission if validation fails
                            }

                            // 2. If validation passes, show a confirmation SweetAlert
                            Swal.fire({
                                title: 'Are you sure?',
                                text: 'Do you want to add this service?',
                                icon: 'question',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Yes, add it!',
                                customClass: {
                                    container: 'swal-modal-zindex' // Add custom class
                                }
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // User confirmed, now create FormData and submit via AJAX
                                    var formData = new FormData(form);
                                    formData.append('description', descriptionData);

                                    // 3. Show loading SweetAlert (Saving message)
                                    Swal.fire({
                                        title: 'Saving Service Category...',
                                        text: 'Please wait while we process your request.',
                                        icon: 'info',
                                        showConfirmButton: false,
                                        allowOutsideClick: false, // Prevent closing the alert
                                        didOpen: () => {
                                            Swal.showLoading(); // Show the loading spinner
                                        }
                                    });

                                    // 4. Perform the AJAX request
                                    $.ajax({
                                        url: $(form).attr('action'),
                                        type: $(form).attr('method'),
                                        data: formData,
                                        contentType: false,
                                        processData: false,
                                        success: function (response) {
                                            Swal.close(); // Close the loading SweetAlert

                                            if (response.success) {
                                                Swal.fire({
                                                    title: 'Success!',
                                                    text: response.message,
                                                    icon: 'success',
                                                    confirmButtonText: 'OK',
                                                    customClass: {
                                                        container: 'swal-modal-zindex'
                                                    }
                                                }).then(() => {
                                                    $('#addServiceModal').modal('hide');
                                                    location.reload();
                                                });
                                            } else {
                                                Swal.fire({
                                                    title: 'Error!',
                                                    text: response.message,
                                                    icon: 'error',
                                                    confirmButtonText: 'OK',
                                                    customClass: {
                                                        container: 'swal-modal-zindex'
                                                    }
                                                });
                                            }
                                        },
                                        error: function (data) {
                                            Swal.close(); // Close the loading SweetAlert
                                            Swal.fire({
                                                title: 'Error!',
                                                text: 'Something went wrong! Please try again.',
                                                icon: 'error',
                                                confirmButtonText: 'OK',
                                                customClass: {
                                                    container: 'swal-modal-zindex'
                                                }
                                            });
                                            console.log(data.responseText);
                                        }
                                    });
                                }
                            });
                        });
                    });
                </script>



                <script>
                    function previewServiceImage(input) {
                        const preview = document.getElementById('serviceImagePreview');
                        const file = input.files[0];

                        if (file) {
                            const reader = new FileReader();
                            reader.onload = function (e) {
                                preview.src = e.target.result;
                            };
                            reader.readAsDataURL(file);
                        } else {
                            preview.src = 'https://via.placeholder.com/200x140?text=Click+to+Upload';
                        }
                    }
                </script>


                @include('layouts.footer')