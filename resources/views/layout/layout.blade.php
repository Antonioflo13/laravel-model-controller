<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    {{-- header --}}
    <header>
        @include('partials.header')
    </header>
    {{-- /header --}}

    {{-- main --}}
    <main>
        @yield('main-content')
    </main>
    {{-- /main --}}

    {{-- footer --}}
    <footer>
        @include('partials.footer')
    </footer>
    {{-- /footer --}}

</body>
</html>