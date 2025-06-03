<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::where('user_id',auth()->id())->latest()->get();
        return view('users.bookings.index',compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.bookings.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'booking_date'=> 'required|date',
            'room'=>'required|string',
            'nights'=>'required|integer|min:1',
            'price'=>'required|numeric|min:0'
        ]);
        Booking::create([
            'user_id' =>Auth()->id(),
            'booking_date'=> $request->booking_date,
            'room'=>$request->room,
            'nights'=>$request->nights,
            'price'=>$request->price
        ]);
        return redirect()->route('user.bookings.index')->with('success','create added successFully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $booking = Booking::where('id', $id)
        ->where('user_id', auth()->id())
        ->firstOrFail();
    return view('users.bookings.edit', compact('booking'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
        'booking_date' => 'required|date',
        'room' => 'required|string',
        'nights' => 'required|integer|min:1',
        'price' => 'required|numeric|min:0'
    ]);

    $booking = Booking::where('id', $id)
        ->where('user_id', auth()->id())
        ->firstOrFail();

    $booking->update($request->only(['booking_date', 'room', 'nights', 'price']));

    return redirect()->route('user.bookings.index')->with('success', 'تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $booking = Booking::where('id', $id)
        ->where('user_id', auth()->id())
        ->firstOrFail();
        $booking->delete();

    return redirect()->route('user.bookings.index')->with('success', 'تم الحذف بنجاح');
    }
}
