<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="padding-top: 50px">
    <div class="container">
        <form method="POST" action="/register">
            {{ csrf_field() }}

            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>

            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>                                                


        </form>
    </div>
</body>
</html>