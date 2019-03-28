<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="blog.css" rel="stylesheet">
    
    <title>{{config('app.name','Blog')}}</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @include('layouts.navbar')
    
    @yield('content')
</body>
</html>
