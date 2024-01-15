<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
</head>

<body>

    {{-- CONTENTS WILL GO HERE --}}
    <div class="container mt-5">
        @yield('content')
    </div>

    <footer>
        @yield('footer')
    </footer>
</body>

</html>
