@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="jumbotron text-center">
        <h1 class="display-4">{{ $message }}</h1>
        <p class="lead">You are logged in!</p>
        <hr class="my-4">
        <p>Welcome to the E-commerce App dashboard.</p>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>
    </div>
</div>
@endsection
