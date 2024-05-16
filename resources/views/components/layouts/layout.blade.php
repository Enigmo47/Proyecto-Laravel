<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    @vite("resources/css/app.css")
</head>
<body>

<x-layouts.header/>

<x-layouts.nav/>

<main class="h-68v bg-main">
        {{ $slot }}
</main>

<x-layouts.footer />

</body>
</html>