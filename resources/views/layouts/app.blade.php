<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel comics</title>
    @vite('resources/js/app.js')
</head>

<body>
    @include ("shared/header")
    <div class="main">
        @yield('content')
    </div>
    @include ("shared/footer")
</body>

</html>