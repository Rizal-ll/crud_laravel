<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            width: 260px;
            background-color: #343a40;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            padding-top: 60px;
        }
        .sidebar h4 {
            font-size: 20px;
            margin-bottom: 30px;
        }
        .sidebar a {
            padding: 15px 20px;
            font-size: 18px;
            color: white;
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
            margin-bottom: 10px;
        }
        .sidebar a:hover {
            background-color: #007bff;
            color: white;
            border-radius: 5px;
        }
        .sidebar hr {
            border: 1px solid #495057;
            margin: 15px 0;
        }
        .content {
            margin-left: 280px;
            padding: 20px;
            background-color: #ffffff;
            min-height: 100vh;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h4 class="text-center text-white">Dashboard</h4>
        <hr>
        <a href="{{ url('/') }}"><i class="fas fa-home"></i> Home</a>
        <a href="{{ route('categories.index') }}"><i class="fas fa-tags"></i> Categories</a>
        <a href="{{ route('products.index') }}"><i class="fas fa-box"></i> Products</a>
    </div>

    <div class="content">
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
