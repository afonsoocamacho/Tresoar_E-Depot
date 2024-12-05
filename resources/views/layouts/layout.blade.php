<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Common CSS -->
    <link rel="stylesheet" href="{{ asset('css/globals.css') }}">
    <!-- Page-Specific CSS -->
    @stack('styles')

</head>
<body>
    <x-nav-bar></x-nav-bar>

    {{ $slot }}
    <x-footer></x-footer>
</body>
</html>