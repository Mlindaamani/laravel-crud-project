    {{-- NAVIGATION BAR --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand text-success fw-bold" href="/">LARA-CRUD </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-nav">
                <a class="nav-link text-success fw-bolder" href="/">Home</a>
                <a class="nav-link text-success fw-bolder" href="{{ route('products.index') }}">Products</a>
            </div>
    </nav>
