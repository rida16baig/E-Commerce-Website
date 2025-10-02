<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Dashboard</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <button class="btn btn-outline-light d-lg-none me-2" id="menu-toggle">☰</button>
            <a class="navbar-brand" href="#">Dashboard</a>
            <div class="d-flex ms-auto justify-content-end align-items-center">
                <span class="navbar-text me-3">Welcome {{ auth()->user()->name }}!</span>
                <a href="{{ route('logout') }}" class="btn btn-warning btn-sm"> Logout</a>
            </div>
        </div>
    </nav>

    <!-- Dashboard Layout -->
    <div class="dashboard-wrapper">
        <!-- Sidebar -->
        <div class="sidebar p-3" id="sidebar">
            <h5 class="mb-4">Menu</h5>
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link" href="#">🏠 Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('vendor.manage_products') }}">📦 Products</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">📦 Orders</a></li>
                <li class="nav-item"><a class="nav-link" href="#">💳 Payments</a></li>
                <li class="nav-item"><a class="nav-link" href="#">⚙️ Settings</a></li>
            </ul>
        </div>

        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    @include('toastr')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const toggleBtn = document.getElementById('menu-toggle');
        const sidebar = document.getElementById('sidebar');
        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('show');
        });
    </script>
</body>

</html>