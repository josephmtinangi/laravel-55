<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="padding-top: 40px;">
   <div class="jumbotron text-center">
        @if(Auth::check())
            <h1>{{ Auth::user()->name }}</h1>
            <form method="POST" action="/logout">
                {{ csrf_field()}}

                <button type="submit" class="btn btn-primary">Logout</button>
            </form>
        @else
            <a class="btn btn-primary" href="/login">Login</a> | <a class="btn btn-default" href="/register">Register</a>
        @endif
   </div>
</body>
</html>