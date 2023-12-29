<?php

namespace App\Http\Controllers;

use App\Models\Tim;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class TimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tims = Tim::all();
        
        return view("tim.index", compact("tims"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("tim.create");
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

        Tim::create($input);

        return redirect("/admin/tims")->with("message","Data berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Tim $tim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tim $tim)
    {
        return view("tim.edit", compact("tim"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tim $tim)
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

        $tim->update($input);

        return redirect("/admin/tims")->with("message","Data berhasil diperbaharui");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tim $tim)
    {
        $tim->delete();

        return redirect("/admin/tims")->with("message","Data berhasil dihapus");
    }
}
