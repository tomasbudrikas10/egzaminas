<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="py-8 mx-auto  w-4/5 bg-blue-400">
        @auth
            <p>{{ auth()->user()->name }}</p>
            <a href="/logout">Log Out</a>
        @endauth
        @guest
            <a href="/login">Log In</a>
            <a href="/register">Register</a>
        @endguest 
    </div>
    @yield('content')
</body>
</html>