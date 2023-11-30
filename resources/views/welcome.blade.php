<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
    </head>
    <body class="bg-slate-300">
        <main class="w-full h-screen flex items-center justify-center ">
            <div class="flex">
                <div>
                    <img class="md:w-6/12" src="{{ asset('electrodomestico.jpg') }}" alt="">
                </div>
                <div>
                    <h1>Hello Welcome!</h1>
                    <div>
                        <label for="">Tienes cuenta?</label><br>
                        <a href="/app">Login</a>
                    </div>
                    <div>
                        <label for="">No tienes cuenta?</label><br>
                        <a href="">Crear cuenta</a>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
