<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}</title>
</head>
<body>
<h1>Login</h1>
<form action="/login" method="post">
    @csrf
    <p>
        <input type="text" name="name" placeholder="username">
    </p>
    <p>
        <input type="password" name="password" placeholder="password">
    </p>
    <p>
        <button type="submit">Login</button>
    </p>
</form>
</body>
</html>