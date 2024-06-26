<?php

namespace App\Http\Controllers;

use App\Models\KritikSaran;
use Illuminate\Http\Request;

class KritikSaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->input('search');

        $query = KritikSaran::query();

        if ($search) {
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('pesan', 'like', "%{$search}%");
        }

        $data = $query->paginate(10);

        return view('kritiksaran.index', compact('data'));
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
        $request->validate([
            'name' => 'required',
            'pesan' => 'required',
        ]);

        KritikSaran::create([
            'name' => $request->name,
            'pesan' => $request->pesan,
        ]);

        return redirect()->to('/#contact')
            ->with('success', 'Kritik & Saran terkirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KritikSaran  $kritikSaran
     * @return \Illuminate\Http\Response
     */
    public function show(KritikSaran $kritikSaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KritikSaran  $kritikSaran
     * @return \Illuminate\Http\Response
     */
    public function edit(KritikSaran $kritikSaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KritikSaran  $kritikSaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KritikSaran $kritikSaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KritikSaran  $kritikSaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(KritikSaran $kritiksaran)
    {
        $kritiksaran->delete();

        return redirect()->route('kritiksaran.index')
            ->with('success', 'Kritik & Saran deleted successfully');
    }
}
