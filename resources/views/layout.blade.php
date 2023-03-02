<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>my web site</title>
</head>
<body>
    <ul>
        <li><a href="{{ route('home')}}">Home</a></li>
        <li><a href="{{ route('about')}}">About</a></li>
        <li><a href="{{ route('posts.create')}}">Create</a></li>
    </ul>
    @yield('content')
</body>
<footer>
    <p>its my first laravel web site ; ZAGAOUCH ilyas</p>
</footer>
</html>