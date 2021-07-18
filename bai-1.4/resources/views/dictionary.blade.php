<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/dictionary" method="post">
    @csrf
<input type="text" name="english" placeholder="english to vietnam">
<button type="submit">Translation</button>
</form>
</body>
</html>
