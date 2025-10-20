<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home | SoulSkin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container text-center mt-5">
        <h1 class="text-success">Welcome to SoulSkin!</h1>
        <p class="mt-3">Hello, {{ session('customer_name') ?? 'Guest' }}</p>

        <a href="{{ route('login') }}" class="btn btn-outline-success mt-4">Logout</a>
    </div>
</body>
</html>
