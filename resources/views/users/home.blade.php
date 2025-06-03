@extends('layouts.user')

@section('content')
    <div class="container">
        <h2>مرحبًا {{ auth()->user()->name }} 👋</h2>
        <p>دي الصفحة الرئيسية الخاصة بالمستخدم.</p>
    </div>
@endsection
