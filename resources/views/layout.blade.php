<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>@yield('title')</title>
    <style>
        .navbar-brand {
            color: red !important;
        }
    </style>
    @yield('css')
</head>
<body>
    @include('nav')
    
    @yield('content')

</body>
</html>