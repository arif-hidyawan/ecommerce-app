<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Custom CSS to align logout button to the right */
        .ml-auto {
            margin-left: auto !important;
        }

        html,
        body {
            height: 100%;
        }

        .content {
            min-height: calc(100vh - 60px); /* Subtract footer height from viewport height */
        }

        .footer {
            bottom: 0;
            width: 100%;
            height: 60px;
            background-color: #343a40; 
            color: #fff; 
        }

        /* Custom CSS for navbar separator */
        .navbar-separator {
            margin-right: 10px;
            margin-top: 12px;
            border-right: 1px solid rgba(0, 0, 0, 0.1);
            padding: 0;
            height: 20px; 
            display: flex;
            align-items: center; 
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Ecommerce App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/products">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/orders">Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cart">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart 
                        @if ($cartItemCount > 0)
                            <span class="badge badge-pill badge-primary">{{ $cartItemCount }}</span>
                        @else
                            <span class="badge badge-pill badge-primary">0</span>
                        @endif
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto"> <!-- Align items to the right -->
                @auth
                <li class="nav-item">
                    <span class="navbar-text mr-3">Hello, {{ Auth::user()->name }}</span>
                </li>
                <li class="nav-item navbar-separator"></li> <!-- Add separator -->
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link">Logout</button>
                    </form>
                </li>
                @endauth
            </ul>
        </div>
    </nav>

    <div class="container mt-5 content"> <!-- Add content class -->
        @yield('content')
    </div>

    <footer class="footer">
        <div class="container text-center py-3">
            <span class="text-muted">Copyright © 2024 Ecommerce App. All rights reserved.</span>
        </div>
    </footer>
    
</body>
</html>
