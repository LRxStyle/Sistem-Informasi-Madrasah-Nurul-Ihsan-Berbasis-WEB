<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kegiatans = Kegiatan::all();
        
        return view("kegiatan.index", compact("kegiatans"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("kegiatan.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title"=> "required",
            "description"=> "required",
            "image"=> "required|image",
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        Kegiatan::create($input);

        return redirect("/admin/kegiatans")->with("message","Data berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kegiatan $kegiatan)
    {
        return view("kegiatan.edit", compact("kegiatan"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        $request->validate([
            "title"=> "required",
            "description"=> "required",
            "image"=> "image",
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }
        else
        {
            unset($input["image"]);
        }

        $kegiatan->update($input);

        return redirect("/admin/kegiatans")->with("message","Data berhasil diperbaharui");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kegiatan $kegiatan)
    {
        $kegiatan->delete();

        return redirect("/admin/kegiatans")->with("message","Data berhasil dihapus");
    }
}
