<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ Route::currentRouteName() }}</title>
        @vite('resources/css/app.css')
    </head>

    <body>
        <main class="bg-gray-900 w-full min-h-[100svh] overflow-y-hidden">
            @yield('content')
        </main>

    </body>

</html>
