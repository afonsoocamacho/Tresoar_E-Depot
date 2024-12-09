<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
  <!-- For iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  
  <!-- General theme color for supported browsers -->
    <meta name="theme-color" content="#820046">
  
  <!-- For Microsoft Edge -->
    <meta name="msapplication-navbutton-color" content="#820046">
    <meta
      name="description"
      content="EDepot - Tresoar's digital archive"
    />

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