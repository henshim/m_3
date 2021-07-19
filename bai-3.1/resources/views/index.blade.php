<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="main-content">
    <h1>Email validate app</h1>
    <form action="{{ route('checkEmail') }}" method="post">
        @csrf
        <input type="text" name="email" id="email" placeholder="Enter your email to validate">
        <button>Check</button>
    </form>
    @if(isset($isEmail))
        Result: {{$isEmail ? 'Correct Email Format' : 'Incorrect Email Format'}}
    @endif
</div>
</body>
</html><?php
