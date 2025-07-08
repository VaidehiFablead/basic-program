<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sort</title>
</head>

<body>
    @if (is_array($array1))
        <h2>Original Array:</h2>
        <p>{{ implode(', ', $array1) }}</p>
    @endif

    @if (is_array($asc))
        <h2>Ascending Order:</h2>
        <p>{{ implode(', ', $asc) }}</p>
    @endif

    @if (is_array($desc))
        <h2>Descending Order:</h2>
        <p>{{ implode(', ', $desc) }}</p>
    @endif


    {{-- <h2>Hemant marks in science: {{ $hemantScience }}</h2> --}}
</body>

</html>
