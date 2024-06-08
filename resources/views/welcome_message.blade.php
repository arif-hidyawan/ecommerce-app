<!-- resources/views/welcome_message.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to E-commerce App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .welcome-container {
            text-align: center;
        }
        .welcome-message {
            font-size: 24px;
            color: #333;
        }
        .btn-custom {
            margin-top: 20px;
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1 class="welcome-message">{{ $message }}</h1>
        <button class="btn btn-custom">Get Started</button>
    </div>
</body>
</html>