<?php

namespace App\Http\Controllers;

use App\Models\Tentang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class TentangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tentang = Tentang::first();

        return view("tentang", compact("tentang"));
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
     * @param  \App\Models\Tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function show(Tentang $tentang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function edit(Tentang $tentang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tentang = Tentang::find($id);

        $request->validate([
            'judul' => 'required',
            'subjudul' => 'required',
            'deskripsi_1' => 'required',
            'deskripsi_2' => 'required',
            'kelebihan_1' => 'required',
            'kelebihan_2' => 'required',
            'kelebihan_3' => 'required',
            'kelebihan_4' => 'required',
        ]);

        $input = $request->all();

        $tentang->update($input);

        return redirect('/admin/tentangs')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tentang $tentang)
    {
        //
    }
}
