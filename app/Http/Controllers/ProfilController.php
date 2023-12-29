<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profils = Profil::all();
        
        return view("profil.index", compact("profils"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("profil.create");
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
        else
        {
            unset($input["image"]);
        }

        Profil::create($input);

        return redirect("/admin/profils")->with("message","Data berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profil $profil)
    {
        return view("profil.edit", compact("profil"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profil $profil)
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

        $profil->update($input);

        return redirect("/admin/profils")->with("message","Data berhasil diperbaharui");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profil $profil)
    {
        $profil->delete();

        return redirect("/admin/profils")->with("message","Data berhasil dihapus");
    }
}
