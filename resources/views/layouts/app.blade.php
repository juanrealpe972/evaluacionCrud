<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header>
        <h1>ELECTRODOMESTIC</h1>
    </header>
    <main>
        @auth
            <div>
                <nav>
                    <form action="{{}}" method="post">
                        <button class="" type="submit">Cerrar Sesión</button>
                    </form>
                </nav>
            </div>
        @endauth
        @guest
            <nav class="flex">
                <a href="">Login</a>
                <a href="">Registrarse</a>
            </nav>
        @endguest
    </main>
</body>

</html>
