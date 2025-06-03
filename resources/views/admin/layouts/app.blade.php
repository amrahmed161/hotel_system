<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('dashboard/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dashboard/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
    @yield('content')

    <script src="{{ asset('dashboard/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
