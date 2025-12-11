@include('layouts.header')

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.side-bar-menu')

            <div class="layout-page">
                @include('layouts.nav-bar')

                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-style1 mb-0">
                                    <li class="breadcrumb-item active text-primary fw-bold">
                                        <a href="{{ url('/') }}">
                                            <i class='bx bx-home-alt mb-1'></i> Dashboard
                                        </a>
                                    </li>

                                    <li class="breadcrumb-item active text-primary fw-bold">
                                        <a href="{{ route('add.medicine') }}">
                                            <i class='bx bx-plus-circle me-1'></i> Add New Medicine
                                        </a>
                                    </li>

                                    <li class="breadcrumb-item active text-primary fw-bold">
                                        <a href="{{ route('pharmacy.inventory') }}">
                                            <i class='bx bx-archive me-1'></i> Inventory
                                        </a>
                                    </li>
                                </ol>
                            </nav>
                        </div>

                        @if(session('success'))
                            <script>
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success!',
                                    text: "{{ session('success') }}",
                                    confirmButtonColor: "#3085d6",
                                });
                            </script>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <h6 class="alert-heading mb-1 d-flex align-items-center">
                                    <i class='bx bx-error-alt me-2'></i> Please correct the following errors:
                                </h6>
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="card shadow-lg">
                            <h5 class="card-header border-bottom">Medicine Details</h5>
                            <div class="card-body">

                                <form action="{{ route('store.medicine') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="row g-4 mb-4">
                                        <div class="col-md-6 pt-4 mt-3">
                                            <label for="medicineName" class="form-label">Medicine Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" id="medicineName" name="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                placeholder="e.g., Paracetamol 500mg" value="{{ old('name') }}"
                                                required>
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6 pt-4 mt-3">
                                            <label for="category" class="form-label">Category <span
                                                    class="text-danger">*</span></label>
                                            <select id="category" name="category_name"
                                                class="form-select @error('category_name') is-invalid @enderror" required>
                                                <option value="">Select Category</option>
                                                @foreach($categories as $cat)
                                                    <option value="{{ $cat['name'] }}" {{ old('category_name') == $cat['name'] ? 'selected' : '' }}>
                                                        {{ $cat['name'] }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('category_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="description" class="form-label">Description / Uses</label>
                                            <textarea id="description" name="description"
                                                class="form-control @error('description') is-invalid @enderror" rows="4"
                                                placeholder="Brief description of the medicine and its uses.">{{ old('description') }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row g-4 mb-4">
                                        <div class="col-md-4">
                                            <label for="price" class="form-label">Price ($) <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" id="price" name="price"
                                                class="form-control @error('price') is-invalid @enderror" step="0.01"
                                                min="0" placeholder="0.00" value="{{ old('price') }}" required>
                                            @error('price')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label for="salePrice" class="form-label">Sale Price ($) <small
                                                    class="text-muted">(Optional)</small></label>
                                            <input type="number" id="salePrice" name="sale_price"
                                                class="form-control @error('sale_price') is-invalid @enderror"
                                                step="0.01" min="0" placeholder="0.00" value="{{ old('sale_price') }}">
                                            @error('sale_price')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-4">
                                            <label for="quantity" class="form-label">Quantity in Stock <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" id="quantity" name="quantity"
                                                class="form-control @error('quantity') is-invalid @enderror" min="1"
                                                placeholder="Minimum 1" value="{{ old('quantity') }}" required>
                                            @error('quantity')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row g-4 mb-4">
                                        <div class="col-md-6">
                                            <label for="sku" class="form-label">SKU (Stock Keeping Unit) <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" id="sku" name="sku"
                                                class="form-control @error('sku') is-invalid @enderror"
                                                placeholder="Unique product code" value="{{ old('sku') }}" required>
                                            @error('sku')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="manufacturer" class="form-label">Manufacturer / Brand</label>
                                            <input type="text" id="manufacturer" name="manufacturer"
                                                class="form-control @error('manufacturer') is-invalid @enderror"
                                                placeholder="e.g., PharmaCo" value="{{ old('manufacturer') }}">
                                            @error('manufacturer')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="expiryDate" class="form-label">Expiry Date</label>
                                            <input type="date" id="expiryDate" name="expiry_date"
                                                class="form-control @error('expiry_date') is-invalid @enderror"
                                                value="{{ old('expiry_date') }}">
                                            @error('expiry_date')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="dosage" class="form-label">Dosage / Strength</label>
                                            <input type="text" id="dosage" name="dosage"
                                                class="form-control @error('dosage') is-invalid @enderror"
                                                placeholder="e.g., 500mg, 10ml, Tablet" value="{{ old('dosage') }}">
                                            @error('dosage')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12">
                                            <label for="productImages" class="form-label">Product Images</label>
                                            <input type="file" id="productImages" name="images[]"
                                                class="form-control @error('images') is-invalid @enderror @error('images.*') is-invalid @enderror"
                                                multiple required>
                                            <small class="text-muted">Upload high-quality images. You can select
                                                multiple images.</small>
                                            @error('images')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                            @error('images.*')
                                                <div class="invalid-feedback d-block">One or more images failed to upload.
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mt-5 pt-3 border-top text-end">
                                        <button type="submit" class="btn btn-primary btn-lg">
                                            <i class='bx bx-save me-1'></i> Save Medicine
                                        </button>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>
                </div>

                <script>
                    document.querySelector("form").addEventListener("submit", function (e) {
                        e.preventDefault(); // Stop form from submitting immediately

                        let form = this;
                        let submitBtn = form.querySelector("button[type='submit']");

                        Swal.fire({
                            title: "Are you sure?",
                            text: "Do you want to save this medicine?",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Yes, save it!"
                        }).then((result) => {
                            if (result.isConfirmed) {

                                // Disable button + show loading state
                                submitBtn.disabled = true;
                                submitBtn.innerHTML = "<span class='spinner-border spinner-border-sm'></span> Saving...";

                                form.submit(); // Now submit
                            }
                        });
                    });
                </script>

                @include('layouts.footer')
            </div>
        </div>
    </div>
</body>