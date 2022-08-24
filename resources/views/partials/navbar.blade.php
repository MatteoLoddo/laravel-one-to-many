<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="/">BOOLPRESS</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto  mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{route('admin.home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('admin.themes.index') }}">Temi</a>
                </li>
                <li>
            @if (Route::has('login'))
            @include('partials.login')
            @endif
            </li>

        </div>
    </div>
</nav>
