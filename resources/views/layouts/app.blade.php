<!-- layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Ecommerce App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
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
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

</body>
</html>
