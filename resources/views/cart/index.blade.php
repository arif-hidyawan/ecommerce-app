<!-- resources/views/cart/index.blade.php -->


@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Shopping Cart</h1>
        
        @if (count($cartItems) > 0)
            <div class="row">
                @foreach ($cartItems as $index => $item)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                @if (array_key_exists('name', $item))
                                    <h5 class="card-title">{{ $item['name'] }}</h5>
                                    <p class="card-text">${{ $item['price'] }}</p>
                                @else
                                    <h5 class="card-title">Product Name Not Available</h5>
                                @endif
                                <form action="{{ route('cart.remove', $index) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <form action="{{ route('orders.place') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary mt-3">Place Order</button>
            </form>
        @else
            <p class="mt-3">Your cart is empty.</p>
        @endif
    </div>
@endsection
