<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product discount calculator</title>
</head>
<body>
<form action="/calculate" method="post">
    @csrf
<textarea name="description" id="" cols="30" rows="10" placeholder="product description"></textarea><br>
<p>
    <input type="number" name='price' placeholder="list price">
</p>
<p>
    <input type="number" name='discount' placeholder="discount percent">
</p>
<button type="submit">Calculate</button>
</form>
</body>
</html>
