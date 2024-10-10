<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PBKK D</title>
    @vite('resources/css/app.css')

</head>

<body class="bg-gray-100">
    <x-navbar />
    <x-header>{{ $title }}</x-header>
    <main class="mx-auto p-4 sm:px-6 lg:px-8 ">
        {{ $slot }}
    </main>
    @vite('resources/js/app.js')

</body>

</html>
