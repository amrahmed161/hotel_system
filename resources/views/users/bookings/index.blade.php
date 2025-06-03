@extends('layouts.user')

@section('content')
<div class="container">
    <h2>My Previous Bookings</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($bookings->count())
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Booking Date</th>
                    <th>Room</th>
                    <th>Number of Nights</th>
                    <th>Price</th>
                    <th>Created At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $booking->booking_date }}</td>
                        <td>{{ $booking->room }}</td>
                        <td>{{ $booking->nights }}</td>
                        <td>{{ $booking->price }} EGP</td>
                        <td>{{ $booking->created_at->format('Y-m-d') }}</td>
                        <td>
                            <a href="{{ route('user.bookings.edit', $booking->id) }}" class="btn btn-warning">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('user.bookings.destroy', $booking->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No bookings found.</p>
    @endif
</div>
@endsection
