@extends('admin.welcome')
@section('content')
    <div class="container mt-3 p-3">
        <h1>Admin Dashboard</h1>
        <div class="row p-4">
            <div class="col-md-4 card mt-2 p-4">
                <h3>Manage Users</h3>
                <p>Manage all users of the application!</p>
                <a href="{{ route('admin.manage-users') }}" class="btn btn-sm btn-primary">View</a>
            </div>

        </div>
    </div>
@endsection