<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- Viene caricato il JS ed anche il file app.scss --}}
    @vite('resources/js/app.js') 
</head>
<body>
    {{-- header --}}
    @include('partials.header')
    
    {{-- contenuto --}}
    @yield('content')
    
    {{-- footer --}}
    @include('partials.footer')
    
</body>
</html>

