<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Login Page</h1>

    <form action= {{ route('login') }} method="POST">
        @csrf
        {{-- {{ -- Cross Site Request Forgery -- }} --}}
        {{-- {{ csrf field }} --}}
        Email
        <input type="text" name="email">
        Password
        <input type="password" name="password">
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
