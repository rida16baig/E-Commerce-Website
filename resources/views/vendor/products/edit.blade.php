@extends('vendor.welcome')
@section('content')
    <div class="container m-3">
        <h2>Edit Product</h2>

        <div class="card p-3">
            <form action="{{ route('vendor.update_product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <input type="hidden" name="id" value="{{ $product->id }}">
                <div class="form-group mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" placeholder="Enter Product Name" class="form-control" value="{{ $product->name }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control">{{ $product->description }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" class="form-control" >
                </div>
                <div class="form-group mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" name="price" placeholder="Enter Product Price" class="form-control" value="{{ $product->price }}" min="0"
                        required>
                </div>
                <div class="form-group mb-3">
                    <label for="color" class="form-label">Color</label>
                    <input type="text" name="color" placeholder="Enter Product Color" class="form-control" value="{{ $product->color }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="discount" class="form-label">Discount</label>
                    <input type="text" name="discount" placeholder="Enter discount here" class="form-control" value="{{ $product->discount }}" required>
                </div>
                <div class="form-group mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="number" name="quantity" placeholder="Enter quantity here" class="form-control" value="{{ $product->quantity }}" required>
                </div>
                <input type="submit" class="btn btn-primary">
            </form>
        </div>
    </div>
@endsection