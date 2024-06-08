<!-- resources/views/products/create.blade.php -->


@extends('layouts.app')

@section('content')
<div class="container mt-5">
        <h1 class="mb-4">Add Product</h1>
        <form action="/products" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="price">Product Price</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <button type="submit" class="btn btn-success">Add Product</button>
        </form>
    </div>
@endsection
