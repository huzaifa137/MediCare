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

                            <a href="{{ route('add.medicine') }}" class="btn btn-primary">
                                <i class="bx bx-plus"></i> Add Medicine
                            </a>
                        </div>

                        <div class="card shadow-sm border-0">
                            <div class="table-responsive p-3">

                                <table class="table table-hover align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                            <th>SKU</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse($medicines as $med)
                                            <tr>
                                                <!-- Image -->
                                                <td>
                                                    @if($med->images->first())
                                                        <img src="{{ asset($med->images->first()->image_path) }}" width="60"
                                                            height="60" class="rounded border">
                                                    @else
                                                        <span class="text-muted">No image</span>
                                                    @endif
                                                </td>

                                                <!-- Name -->
                                                <td class="fw-bold">{{ $med->name }}</td>

                                                <!-- Category -->
                                                <td>{{ $med->category->name ?? '—' }}</td>

                                                <!-- Price -->
                                                <td>
                                                    <strong>${{ number_format($med->price, 2) }}</strong>
                                                    @if($med->sale_price)
                                                        <div class="text-danger small">Sale:
                                                            ${{ number_format($med->sale_price, 2) }}</div>
                                                    @endif
                                                </td>

                                                <!-- Quantity -->
                                                <td>
                                                    @if($med->quantity <= 5)
                                                        <span class="badge bg-danger">{{ $med->quantity }}</span>
                                                    @elseif($med->quantity <= 15)
                                                        <span class="badge bg-warning">{{ $med->quantity }}</span>
                                                    @else
                                                        <span class="badge bg-success">{{ $med->quantity }}</span>
                                                    @endif
                                                </td>

                                                <!-- SKU -->
                                                <td>{{ $med->sku }}</td>

                                                <!-- Status -->
                                                <td>
                                                    @if($med->quantity > 0)
                                                        <span class="badge bg-success">In Stock</span>
                                                    @else
                                                        <span class="badge bg-secondary">Out of Stock</span>
                                                    @endif
                                                </td>

                                                <!-- Actions -->
                                                <td>
                                                    <button class="btn btn-sm btn-info"
                                                        onclick="showMedicine({{ $med->id }})">
                                                        <i class="bx bx-show"></i>
                                                    </button>
                                                    <a href="#" class="btn btn-sm btn-warning"><i
                                                            class="bx bx-edit"></i></a>
                                                    <button onclick="deleteMedicine({{ $med->id }})"
                                                        class="btn btn-sm btn-danger">
                                                        <i class="bx bx-trash"></i>
                                                    </button>
                                                </td>

                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="8" class="text-center text-muted">
                                                    No medicines found.
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>

                                <!-- View Medicine Modal -->
                                <div class="modal fade" id="viewMedicineModal" tabindex="-1">
                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                        <div class="modal-content shadow-lg">

                                            <div class="modal-header bg-primary text-white">
                                                <h5 class="modal-title text-white">Medicine Details</h5>
                                                <button type="button" class="btn-close btn-close-white mb-1"
                                                    data-bs-dismiss="modal"
                                                    style="background-color: #343a40;  width: 32px; height: 15px; display: flex; align-items: center; justify-content: center;">
                                                </button>

                                            </div>

                                            <div class="modal-body">

                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <div id="medicineImages" class="mb-3"></div>
                                                    </div>

                                                    <div class="col-md-7">

                                                        <h4 id="medName" class="fw-bold mb-2"></h4>
                                                        <p class="text-muted" id="medCategory"></p>

                                                        <p id="medDescription" class="mb-3"></p>

                                                        <table class="table table-bordered">
                                                            <tr>
                                                                <td><strong>Price</strong></td>
                                                                <td id="medPrice"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Sale Price</strong></td>
                                                                <td id="medSalePrice"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Quantity</strong></td>
                                                                <td id="medQuantity"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>SKU</strong></td>
                                                                <td id="medSku"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Manufacturer</strong></td>
                                                                <td id="medManufacturer"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Expiry Date</strong></td>
                                                                <td id="medExpiry"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>Dosage</strong></td>
                                                                <td id="medDosage"></td>
                                                            </tr>
                                                        </table>

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                                                <a id="editBtn" href="#" class="btn btn-warning">
                                                    <i class="bx bx-edit"></i> Edit
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3">
                                    {{ $medicines->links() }}
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <script>
                    function deleteMedicine(id) {
                        Swal.fire({
                            title: "Are you sure?",
                            text: "This medicine will be permanently deleted!",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Yes, delete it"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "/pharmacy/delete-medicine/" + id;
                            }
                        });
                    }

                    function showMedicine(id) {
                        $.ajax({
                            url: "/pharmacy/medicine/" + id,
                            method: "GET",
                            success: function (data) {

                                $("#medName").text(data.name);
                                $("#medCategory").text(data.category_name ?? "—");
                                $("#medDescription").text(data.description ?? "No description");

                                $("#medPrice").text("$" + parseFloat(data.price).toFixed(2));
                                $("#medSalePrice").text(data.sale_price ? "$" + parseFloat(data.sale_price).toFixed(2) : "—");
                                $("#medQuantity").text(data.quantity);
                                $("#medSku").text(data.sku);
                                $("#medManufacturer").text(data.manufacturer ?? "—");
                                $("#medExpiry").text(data.expiry_date ?? "—");
                                $("#medDosage").text(data.dosage ?? "—");

                                let imagesHtml = "";
                                if (data.images.length > 0) {
                                    data.images.forEach(img => {
                                        imagesHtml += `
                        <img src="/${img.image_path}" class="img-fluid rounded mb-2 border" />
                    `;
                                    });
                                } else {
                                    imagesHtml = `<span class="text-muted">No images available.</span>`;
                                }
                                $("#medicineImages").html(imagesHtml);

                                $("#editBtn").attr("href", "/pharmacy/medicine/edit/" + id);

                                var modal = new bootstrap.Modal(document.getElementById('viewMedicineModal'));
                                modal.show();
                            },
                            error: function (data) {
                                $('body').html(data.responseText);
                            }
                        });
                    }

                </script>

                @include('layouts.footer')

            </div>
        </div>
    </div>
</body>