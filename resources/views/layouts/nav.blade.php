@php
    $currentRouteName = Route::currentRouteName();
@endphp

{{-- Navbar Component --}}
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data Master</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-lg-none text-white-50">
            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link {{ $currentRouteName == 'home' ? 'active' : '' }}">Home</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('employees.index') }}" class="nav-link {{ $currentRouteName == 'employees.index' ? 'active' : '' }}">Employee List</a></li>
            </ul>
            <hr class="d-lg-none text-white-50">
            <div class="dropdown ms-md-auto">
                <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi-person-circle me-1"></i> Administrator
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="{{ route('profile') }}"><i class="bi-person me-1"></i> My Profile</a></li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="d-inline">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger"><i class="bi bi-lock-fill text-danger me-1"></i> Log Out</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
