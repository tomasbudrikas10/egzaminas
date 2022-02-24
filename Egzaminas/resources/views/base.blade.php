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
    <div class="py-8 bg-blue-400">
        <ul class="w-3/5 mx-auto">
            @auth
            <p>{{ auth()->user()->name }}</p>
            <form action="/logout" method="POST">@csrf <input type="submit">Log Out</form>
            @endauth
            @guest
            <a href="/login">Log In</a>
            <a href="/register">Register</a>
            @endguest 
        </ul>
    </div>
    @yield('content')
</body>
</html>