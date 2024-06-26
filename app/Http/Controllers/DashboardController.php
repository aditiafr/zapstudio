<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = Carbon::today();

        $data = DB::table('bookings')
            ->join('pakets', 'pakets.id_paket', '=', 'bookings.id_paket')
            ->join('category', 'category.id_category', '=', 'bookings.id_category')
            ->whereDate('bookings.tanggal', $today)
            ->select('bookings.*', 'pakets.*', 'category.*') // pastikan Anda memilih kolom yang Anda butuhkan
            ->paginate(10);

        // Get the start and end date of the current month
        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();

        // Calculate the total sum of the harga field for the current month
        $totalHarga = DB::table('bookings')
            ->join('pakets', 'pakets.id_paket', '=', 'bookings.id_paket')
            ->join('category', 'category.id_category', '=', 'bookings.id_category')
            ->whereBetween('bookings.tanggal', [$startOfMonth, $endOfMonth])
            ->sum('category.harga');

        $totalBooking = Booking::count();

        return view('dashboard.index', compact('data', 'totalBooking', 'totalHarga'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
