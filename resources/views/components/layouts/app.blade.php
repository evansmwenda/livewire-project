<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Titledd' }}</title>
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="flex flex-wrap justify-center">
        <div class="my-10 w-full flex justify-center">
            {{ $slot }}
        </div>
    </body>
</html>
