<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tentang;
use App\Models\Kontak;
use App\Models\Slider;
use App\Models\Profil;
use App\Models\Kegiatan;
use App\Models\Tim;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $tentang = Tentang::first();
        $profils = Profil::all();
        $kegiatans = Kegiatan::all();
        $kontak = Kontak::first();

        return view('home.index', compact(
            'sliders',
            'tentang',
            'profils',
            'kegiatans',
            'kontak',
        ));
    }

    public function tentang()
    {
        $tentang = Tentang::first();
        $tims = Tim::all();
        $kontak = Kontak::first();
        $profils = Profil::all();

        return view('home.tentang', compact(
            'tentang',
            'tims',
            'kontak',
            'profils',
        ));
    }

    public function tim()
    {
        $tims = Tim::all();
        $kontak = Kontak::first();
        $profils = Profil::all();

        return view('home.tim', compact(
            'tims',
            'kontak',
            'profils',
        ));
    }

    public function kegiatan()
    {
        $kegiatans = Kegiatan::all();
        $kontak = Kontak::first();
        $profils = Profil::all();

        return view('home.kegiatan', compact(
            'kegiatans',
            'kontak',
            'profils',
        ));
    }

    public function kontak()
    {
        $kontak = Kontak::first();
        $profils = Profil::all();

        return view('home.kontak', compact(
            'kontak',
            'profils',
        ));
    }

    public function profil()
    {
        $profils = Profil::all();
        $kontak = Kontak::first();

        return view('home.profil', compact(
            'profils',
            'kontak',
        ));
    }
}
