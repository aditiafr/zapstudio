<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Paket;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $bookings = Booking::all();

        return view('booking.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $namapaket = Paket::all()->groupBy('name');
        $paket = Paket::all();

        return view('booking.create', compact('paket', 'namapaket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'notlp' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'paket' => 'required',
            'category' => 'required',
        ]);

        // $input = $request->all();

        $tanggal = date('Y-m-d', strtotime($request->tanggal));

        Booking::create([
            'name' => $request->name,
            'email' => $request->email,
            'notlp' => $request->notlp,
            'tanggal' => $tanggal,
            'jam' => $request->jam,
            'paket' => $request->paket,
            'category' => $request->category,
        ]);

        return redirect()->route('booking.index')
            ->with('success', 'Booking created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        $namapaket = Paket::all()->groupBy('name');
        $paket = Paket::all();
        return view('booking.edit', compact('booking', 'namapaket', 'paket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $tanggal = date('Y-m-d', strtotime($request->tanggal));

        $booking->update([
            'name' => $request->name,
            'email' => $request->email,
            'notlp' => $request->notlp,
            'tanggal' => $tanggal,
            'jam' => $request->jam,
            'paket' => $request->paket,
            'category' => $request->category,
        ]);

        return redirect()->route('booking.index')
            ->with('success', 'Booking update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();

        return redirect()->route('booking.index')
            ->with('success', 'Booking deleted successfully');
    }
}
