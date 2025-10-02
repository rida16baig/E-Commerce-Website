@extends('vendor.welcome')
@section('content')
    <!-- Main Content -->
    <div class="flex-grow-1 p-4">
        <h2>Dashboard Overview</h2>
        <p>This is your vendor dashboard where you can view orders, manage payments, update settings, and much
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
@endsection