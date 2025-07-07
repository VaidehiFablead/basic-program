<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Odd Even</title>
</head>
<body>
    <h1>Odd Even Number</h1>

    @foreach ($result as $line)
        {{$line}}<br>
    @endforeach
</body>
</html>