<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/8052e1056c.js" crossorigin="anonymous"></script>
        <script src="https://cdn.tailwindcss.com"> </script>
     
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased bg-gray-100  flex flex-col min-h-screen">
        <x-partials.header />
        <main class="flex-grow p-5">
            @if (session()->has('success'))
            <div class="flex justify-center items-center bg-gray-100 w-full py-3">
                <p class="text-xs font-bold bg-white uppercase border border-green-700 rounded px-4 py-2">
                    {{ session()->get('success') }}
                </p>
            </div>
        @elseif (session()->has('error'))
            <div class="flex justify-center items-center bg-gray-100 w-full py-3">
                <p class="text-xs color-red-500 font-bold bg-white uppercase border border-red-700 rounded px-4 py-2">
                    {{ session()->get('error') }}
                </p>
            </div>
        @endif
        {{ $content }}
        </main>
        <x-partials.footer class="mt-auto flex-shrink-0"/>
    </body>
</html>
