<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav></nav>
    {{ $slot }}
    <footer>
        <p>&copy; {{ date('Y') }} Tresoar E-Depot. All rights reserved.</p>
    </footer>
</body>
</html>