<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    @auth
        <h1>Welcome {{ Auth::user()->name }} </h1>

        @if (Auth::user()->role === 'admin')
            <a href="/home/admin">Admin Page</a>
        @endif
        <br>
        <br>
        <br>

        <form action= {{ route('logout')}} method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
        <br>

        @foreach ($chats as $c)
            <div>
                {{$c->user->name}}
                {{$c->message}}
            </div> 
        @endforeach

        <form action={{ route('chat') }} method="POST">
            @csrf
            <input type="text" name="message" id="">
            <button type="submit">Send</button>
        </form>
    @endauth
</body>
</html>
