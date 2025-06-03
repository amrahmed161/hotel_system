@extends('admin.layouts.app')

@section('content')
<div class="container mt-5">
    <h2>  Edit data admin</h2>

    <form action="{{ route('admin.admins.update', $admin->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $admin->name) }}" required>
        </div>

        <div class="mb-3">
            <label> Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $admin->email) }}" required>
        </div>

        <div class="mb-3">
            <label>  Password (اختياري)</label>
            <input type="password" name="password" class="form-control">
        </div>

        <div class="mb-3">
            <label>password_confirmation</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
