@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Order Placed Successfully</h1>
        <p>Your order has been placed successfully. Thank you for shopping with us!</p>
        <a href="{{ route('orders.index') }}" class="btn btn-primary">View My Orders</a>
    </div>
@endsection
