@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h3 class="mb-4">Booking List</h3>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Booking Date</th>
                    <th>Room</th>
                    <th>Number of Nights</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $booking->user->name ?? 'Unknown' }}</td>
                        <td>{{ $booking->booking_date }}</td>
                        <td>{{ $booking->room }}</td>
                        <td>{{ $booking->nights }}</td>
                        <td>{{ $booking->price }}</td>
                        <td>{{ $booking->status }}</td>
                        <td>
                            <a href="{{ route('admin.bookings.edit', $booking->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('admin.bookings.destroy', $booking->id) }}" method="POST" style="d
