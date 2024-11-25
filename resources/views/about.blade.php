<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>About Us</h1>
    </header>
    <main>
        <p>Welcome to our about page.</p>
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} Tresoar E-Depot. All rights reserved.</p>
    </footer>
</body>
</html>