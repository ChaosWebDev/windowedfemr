<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }}</title>

    {{-- CDNs/Externals --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>
    <style>
        @import "https://www.nerdfonts.com/assets/css/webfont.css";
    </style>

    {{-- Vite --}}
    @vite(['resources/styles/app.scss', 'resources/js/app.js'])

</head>

<body>
    <x-menu />
    {{ $slot }}
    <x-footer />
</body>

</html>
