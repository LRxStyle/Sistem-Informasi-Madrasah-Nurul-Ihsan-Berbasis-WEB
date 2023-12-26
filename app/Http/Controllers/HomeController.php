<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("home.index");
    }

    public function tentang()
    {
        return view("home.tentang");
    }

    public function tim()
    {
        return view("home.tim");
    }

    public function profil()
    {
        return view("home.profil");
    }

    public function kegiatan()
    {
        return view("home.kegiatan");
    }

    public function kontak()
    {
        return view("home.kontak");
    }
}
