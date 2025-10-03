@extends('vendor.welcome')
@section('content')
    <div class="container m-3">
        <h2>Manage Products</h2>
        <p>Manage and upload new products to your online store.</p>
        <div class="d-flex justify-content-end">
            <a href="{{ route('vendor.add_product') }}" class=" btn btn-primary">Upload Product</a>
        </div>
        <div class="mt-5">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Color</th>
                        <th scope="col">Discount</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $index => $product)
                        <tr>
                            <th scope="row">{{ $index + 1 }}</th>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>${{$product->price}}</td>
                            <td>{{$product->color}}</td>
                            <td>{{$product->discount}}</td>
                            <td>{{$product->quantity}}</td>
                            <td><a href="{{ route('vendor.edit_product',encrypt($product->id)) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a> <a href="{{ route('vendor.delete_product',encrypt($product->id)) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection