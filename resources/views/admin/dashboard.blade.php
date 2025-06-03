@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <h1>مرحباً بك في لوحة التحكم</h1>
        <a href="{{ route('admin.admins.index') }}" class="btn btn-primary mt-3">
            إدارة المشرفين
        </a>
    </div>
@endsection
