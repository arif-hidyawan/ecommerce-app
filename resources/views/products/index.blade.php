<!-- resources/views/products/index.blade.php -->


@extends('layouts.app')

@section('content')
<div class="container mt-5">
        <h1 class="mb-4">Product List</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="/products/create" class="btn btn-primary mb-3">Add Product</a>
        
    </div>
    <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product['id'] }}</td>
                        <td>{{ $product['name'] }}</td>
                        <td>${{ $product['price'] }}</td>
                        <td><div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $product['name'] }}</h5>
            <p class="card-text">${{ $product['price'] }}</p>
            <form action="{{ route('cart.add', $product['id']) }}" method="POST">
                @csrf
                <input type="hidden" name="name" value="{{ $product['name'] }}">
                <input type="hidden" name="price" value="{{ $product['price'] }}">
                <button type="submit" class="btn btn-primary">Add to Cart</button>
            </form>
        </div>
    </div></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection
