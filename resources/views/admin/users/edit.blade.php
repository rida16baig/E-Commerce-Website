@extends('admin.welcome')
@section('content')
    <div class="container-fluid py-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="fw-bold">Edit User</h2>
        </div>
        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('admin.update-user',encrypt($user->id)) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" id="role" name="role" required>
                            <option value="customer" {{ $user->role == 'customer' ? 'selected' : '' }}>Customer</option>
                            <option value="vendor" {{ $user->role == 'vendor' ? 'selected' : '' }}>Vendor</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Leave blank to keep current password">
                    </div>
                    <button type="submit" class="btn btn-primary">Update User</button>
                    <a href="{{ route('admin.manage-users') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>

@endsection