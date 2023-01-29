<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    create.blade.php
    <form method="post" action="{{ route('routing.create') }}">
        @csrf
        <button type="submit">確認</button>
    </form>
</body>

</html>
