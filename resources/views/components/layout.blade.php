<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SmartBookmark</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="">

    <x-nav />

    <main class="max-w-3xl mx-auto mt-5">
        {{ $slot }}
    </main>

</body>

</html>
