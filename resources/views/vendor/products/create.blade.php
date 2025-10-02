@extends('vendor.welcome')
@section('content')
    <div class="container m-3">
        <h2>Add Product</h2>
        <p>Upload new product to your online store.</p>

        <div class="card p-3">
            <form action="{{ route('vendor.upload_product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" placeholder="Enter Product Name" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control"></textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control"  required>
                </div>
                <div class="form-group mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" placeholder="Enter Product Price" class="form-control" min="0"
                        required>
                </div>
                <div class="form-group mb-3">
                    <label for="color" class="form-label">Color</label>
                    <input type="text" name="color" placeholder="Enter Product Color" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="discount" class="form-label">Discount</label>
                    <input type="text" name="discount" placeholder="Enter discount here" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" name="quantity" placeholder="Enter quantity here" class="form-control" required>
                </div>
                <input type="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection