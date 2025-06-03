<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title> Dashboard</title>
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/dist/css/adminlte.min.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav me-auto">
        <li class="nav-item me-4">
            <a class="nav-link text-primary fw-semibold" href="{{ route('user.bookings.index') }}">My Bookings</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-primary fw-semibold" href="{{ route('user.bookings.create') }}">Appointment</a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button class="btn btn-danger btn-sm px-3 py-1">Logout</button>
            </form>
        </li>
    </ul>
</nav>


    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="#" class="brand-link text-center">
            <span class="brand-text font-weight-light">مستخدم</span>
        </a>

        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" role="menu">
                    <li class="nav-item">
                        <a href="{{ route('user.home') }}" class="nav-link">
                            <i class="nav-icon fas fa-home"></i>
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user.bookings.index') }}" class="nav-link">
                            <i class="nav-icon fas fa-calendar-check"></i>
                            <p>Bookings</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user.bookings.create') }}" class="nav-link">
                            <i class="nav-icon fas fa-plus-circle"></i>
                            <p>حجز موعد</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Content Wrapper -->
    <div class="content-wrapper p-4">
        @yield('content')
    </div>

    <footer class="main-footer text-center">
        <strong>جميع الحقوق محفوظة © 2025</strong>
    </footer>
</div>

<script src="{{ asset('dashboard/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dashboard/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
