<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanProfilController extends Controller
{
    public function profilKepalaDinas()
    {
        $title = '';

        if(request('profil-kepala-dinas')) {
            $title = "Profil Kepala Dinas";
            $text = "";
        } elseif (request('sejarah-kota-samarinda')) {
            $title = "Sejarah Kota Samarinda";
            $text = "";
        } elseif (request('sejarah-kota-samarinda')) {
            $title = "Sejarah Kota Samarinda";
            $text = "";
        } elseif (request('sejarah-kota-samarinda')) {
            $title = "Sejarah Kota Samarinda";
            $text = "";
        } elseif (request('sejarah-kota-samarinda')) {
            $title = "Sejarah Kota Samarinda";
            $text = "";
        } elseif (request('sejarah-kota-samarinda')) {
            $title = "Sejarah Kota Samarinda";
            $text = "";
        } 

    }
}
