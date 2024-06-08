<!-- resources/views/cart/index.blade.php -->


@extends('layouts.app')

@section('content')
    <div class="container mt-5">
            <h1 class="mb-4">Shopping Cart</h1>
            <ul class="list-group">
            @foreach ($cartItems as $index => $item)
        <div>
            @if (array_key_exists('name', $item))
                {{ $item['name'] }} - ${{ $item['price'] }}
            @else
                Product Name Not Available
            @endif
            <form action="{{ route('cart.remove', $index) }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Remove</button>
            </form>
        </div>
            @endforeach
        </div>

        @if (count($cartItems) > 0)
            <form action="{{ route('orders.place') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary mt-3">Place Order</button>
            </form>
        @else
            <p class="mt-3">Your cart is empty.</p>
        @endif
@endsection