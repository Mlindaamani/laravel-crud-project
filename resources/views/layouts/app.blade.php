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
        <div class="container">
            <p class="container mt-5 bg-dark-subtle p-3 rounded-2 border-danger">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel repellat quae officiis amet saepe vitae
                ullam aspernatur similique laudantium. Nostrum consectetur dolorum blanditiis sit! Magnam delectus
                beatae eaque dolores amet dicta in dignissimos quas ut vitae possimus quam unde, eos itaque soluta,
                nulla consectetur iusto optio quaerat quod! Vero optio quos animi eos dicta nostrum voluptatem natus, ut
                architecto, illo ducimus voluptatum velit commodi reiciendis aut laboriosam ipsa voluptas laborum illum
                ad odit vel. Ipsam obcaecati velit vitae
            </p>
        </div>
        @yield('footer')
    </footer>
</body>

</html>
