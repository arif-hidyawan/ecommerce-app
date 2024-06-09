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
    
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-3 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <img src="https://placehold.co/200x200"/>
                        <h5 class="card-title">{{ $product['name'] }}</h5>
                        <p class="card-text">${{ $product['price'] }}</p>
                        <form action="{{ route('cart.add', $product['id']) }}" method="POST">
                            @csrf
                            <input type="hidden" name="name" value="{{ $product['name'] }}">
                            <input type="hidden" name="price" value="{{ $product['price'] }}">
                            <button type="submit" class="btn btn-primary">Add to Cart</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

