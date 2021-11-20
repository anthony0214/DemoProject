<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <div class="header">
        <h1>HEADER</h1>
        @include('layouts.nav')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ 'css/app.css' }}">
</head>
    
    <div class="content">
        @yield('content')
    </div>
    <div class="footer">
        <h1>Footer</h1>
        <nav>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">CARS</a></li>
                <li><a href="#">CONTACT US</a></li>
            </ul>
            <img src="{{ asset('storage/images/1.jpg') }}" alt="1.jpg" style="width=150px; height:150px">
        </nav>
    </div>
<body>
    
</body>
</html>