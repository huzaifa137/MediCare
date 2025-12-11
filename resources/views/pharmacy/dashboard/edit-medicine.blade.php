@include('layouts.header')

<body>
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

        @include('layouts.side-bar-menu')

        <div class="layout-page">

            @include('layouts.nav-bar')

            <div class="content-wrapper">

                <div class="container-xxl flex-grow-1 container-p-y">

                    {{-- Your edit form goes here --}}
                    {{-- @include('pharmacy.dashboard.form-edit-medicine') --}}

                </div>

            </div>

            @include('layouts.footer')

        </div>
    </div>
</div>
</body>
