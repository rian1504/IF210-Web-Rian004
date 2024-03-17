<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'My App')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header>
        @include('components.header')
    </header>
    <h1>List Produk</h1>
    <div class="container">
        <main>
            @yield('content')
        </main>
    </div>
    <footer>
        @include('components.footer')
    </footer>
</body>
</html>