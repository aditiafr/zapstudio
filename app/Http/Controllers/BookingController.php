<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Category;
use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $data = DB::table('bookings')
            ->join('pakets', 'pakets.id_paket', '=', 'bookings.id_paket')
            ->join('category', 'category.id_category', '=', 'bookings.id_category')
            ->get();
        return view('booking.index', compact('bookings', 'data'));
    }

    public function userBooking()
    {
        $paket = Paket::all();

        return view('userbooking.index', compact('paket'));
    }

    public function userPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'notlp' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
            'id_paket' => 'required',
            'id_category' => 'required',
        ]);

        // $input = $request->all();

        $tanggal = date('Y-m-d', strtotime($request->tanggal));

        Booking::create([
            'name' => $request->name,
            'email' => $request->email,
            'notlp' => $request->notlp,
            'tanggal' => $tanggal,
            'jam' => $request->jam,
            'id_paket' => $request->id_paket,
            'id_category' => $request->id_category,
        ]);

        return redirect('userbooking')
            ->with('success', 'Booking successfully.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paket = Paket::all();

        return view('booking.create', compact('paket'));
    }

    public function filter(Request $request)
    {
        $namapaket = $request->get('id_paket');
        $categories = Category::where('id_paket', $namapaket)->get();
        return response()->json($categories);
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
            'id_paket' => 'required',
            'id_category' => 'required',
        ]);

        // $input = $request->all();

        $tanggal = date('Y-m-d', strtotime($request->tanggal));

        Booking::create([
            'name' => $request->name,
            'email' => $request->email,
            'notlp' => $request->notlp,
            'tanggal' => $tanggal,
            'jam' => $request->jam,
            'id_paket' => $request->id_paket,
            'id_category' => $request->id_category,
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
        $paket = Paket::all();

        return view('booking.edit', compact('booking', 'paket'));
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
            'id_paket' => $request->id_paket,
            'id_category' => $request->id_category,
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
