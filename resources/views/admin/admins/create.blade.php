@extends('admin.layouts.app')

@section('content')
<div class="container mt-5">
    <h2>  Add new admin</h2>

    <form action="{{ route('admin.admins.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label>Email </label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
        </div>

        <div class="mb-3">
            <label> password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>password_confirmation </label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">حفظ</button>
        <a href="{{ route('admin.admins.index') }}" class="btn btn-secondary">رجوع</a>
    </form>
</div>
@endsection
