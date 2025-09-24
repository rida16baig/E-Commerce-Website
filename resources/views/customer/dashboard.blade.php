<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
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
                <li class="nav-item"><a class="nav-link" href="#">📦 Orders</a></li>
                <li class="nav-item"><a class="nav-link" href="#">💳 Payments</a></li>
                <li class="nav-item"><a class="nav-link" href="#">📩 Messages</a></li>
                <li class="nav-item"><a class="nav-link" href="#">❓ Help</a></li>
                <li class="nav-item"><a class="nav-link" href="#">⚙️ Settings</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-grow-1 p-4">
            <h2>Dashboard Overview</h2>
            <p>This is your customer dashboard where you can view orders, manage payments, update settings, and much
                more.</p>

            <div class="row g-3">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Orders</h5>
                            <p class="card-text">Track and manage your recent orders.</p>
                            <a href="#" class="btn btn-primary btn-sm">View Orders</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Payments</h5>
                            <p class="card-text">Check your payment history and billing.</p>
                            <a href="#" class="btn btn-primary btn-sm">Manage Payments</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Settings</h5>
                            <p class="card-text">Update your profile and account settings.</p>
                            <a href="#" class="btn btn-primary btn-sm">Go to Settings</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
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