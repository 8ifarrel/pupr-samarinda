<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Galeri;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    public function index($slug) {
        $galeri = Galeri::whereSlug($slug)->first();
        $foto = Foto::where('id_album', $galeri->id)->get();

        return view('umum.e-library.foto', [
            'foto' => $foto
        ]);
    }
}
