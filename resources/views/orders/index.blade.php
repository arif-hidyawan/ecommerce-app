<!-- orders/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">My Orders</h1>
        <ul class="list-group">
            @foreach ($orders as $order)
                <li class="list-group-item">
                    Order #{{ $order->id }} - ${{ $order->total_price }} - Status: {{ $order->status }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection