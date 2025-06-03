@extends('layouts.user') 

@section('content')
<div class="container">
    <h2>حجز موعد جديد</h2>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <form action="{{ route('user.bookings.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label> Date</label>
            <input type="date" name="booking_date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Room</label>
            <input type="text" name="room" class="form-control" required>
        </div>

        <div class="mb-3">
            <label> Nights</label>
            <input type="number" name="nights" class="form-control" value="1" required>
        </div>

        <div class="mb-3">
            <label>Price</label>
            <input type="number" name="price" class="form-control" step="0.01" required>
        </div>

        <button type="submit" class="btn btn-primary">احجز الآن</button>
    </form>
</div>
@endsection
