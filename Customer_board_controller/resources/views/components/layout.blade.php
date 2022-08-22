<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta charset="UTF-8">
    <title>{{ $title }}</title>

</head>


<body>
<div class="container">
    <h1> {{ $title }}</h1>

    {{ $slot }}

</div>

</body>
</html>
