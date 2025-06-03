@extends('layouts.user')

@section('content')
<h2>تعديل الحجز</h2>

<form action="{{ route('user.bookings.update', $booking->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Date </label>
        <input type="date" name="booking_date" class="form-control" value="{{ $booking->booking_date }}">
    </div>

    <div class="form-group">
        <label>Room</label>
        <input type="text" name="room" class="form-control" value="{{ $booking->room }}">
    </div>

    <div class="form-group">
        <label> nights</label>
        <input type="number" name="nights" class="form-control" value="{{ $booking->nights }}">
    </div>

    <div class="form-group">
        <label>Price</label>
        <input type="number" step="0.01" name="price" class="form-control" value="{{ $booking->price }}">
    </div>

    <button class="btn btn-success mt-2">Update</button>
</form>
@endsection
