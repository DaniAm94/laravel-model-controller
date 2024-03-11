<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>

    @vite('resources/js/app.js')
</head>

<body>
    {{-- Header --}}
    <header class="py-3 mb-3">
        <div class="container-sm">
            <h1 class="text-center">Laravel Model & Controller | MOVIE</h1>
        </div>
    </header>

    {{-- Main --}}
    <main>
        @yield('main-content')
    </main>

    {{-- Footer --}}
    <footer></footer>

</body>

</html>
