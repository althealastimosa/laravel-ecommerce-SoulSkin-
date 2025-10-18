<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register | SoulSkin </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e0f7f1; 
            font-family: 'Segoe UI', sans-serif;
        }

        .card {
            background-color: #f0fcfa; 
            border-radius: 15px;
            border: none;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }

        h2 {
            color: #2ca58d; 
        }

        .form-control {
            border-radius: 10px;
            border: 1px solid #a0e5d8; 
            background-color: #e0faf4; 
        }

        .form-control:focus {
            border-color: #4fd1c5;
            box-shadow: 0 0 5px rgba(79, 209, 197, 0.5);
        }

        .btn-success {
            background-color: #4fd1c5; 
            border: none;
            border-radius: 10px;
        }

        .btn-success:hover {
            background-color: #38b59f; 
        }

        a {
            color: #2ca58d;
            text-decoration: none;
        }

        a:hover {
            color: #1e7862;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Join <strong>FashionFusion</strong> Today!</h2>

        <form action="{{ route('register.submit') }}" method="POST" class="card p-4 mx-auto" style="max-width: 400px;">
            @csrf
            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" name="name" class="form-control"  required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control"  required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control"  required>
            </div>

            <button type="submit" class="btn btn-success w-100">Create Account</button>

            <p class="text-center mt-3">
                Already have an account? <a href="{{ route('login') }}">Login here</a>
            </p>
        </form>
    </div>
</body>
</html>
