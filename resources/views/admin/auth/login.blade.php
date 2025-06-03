@extends('admin.layouts.app') <!-- هنعملها كمان شوية -->

@section('content')
<div class="login-box">
    <div class="login-logo">
        <b>Admin</b> Login
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            <form method="POST" action="{{ route('admin.login') }}">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" required autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text"><span class="fas fa-lock"></span></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">تسجيل الدخول</button>
            </form>
        </div>
    </div>
</div>
@endsection
