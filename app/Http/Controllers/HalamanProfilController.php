<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanProfilController extends Controller
{    
    public function index($page) {
        if($page === 'profil-kepala-dinas') {
            $title = "Profil Kepala Dinas";
        } elseif ($page === 'sejarah-kota-samarinda') {
            $title = "Sejarah Kota Samarinda";
        } elseif ($page === 'sejarah-dpupr-kota-samarinda') {
            $title = "Sejarah DPUPR Kota Samarinda";
        } elseif ($page === 'struktur-organisasi') {
            $title = "Struktur Organisasi";
        } elseif ($page === 'tupoksi') {
            $title = "Tugas, Pokok, dan Fungsi";
        } elseif ($page === 'visi-misi') {
            $title = "Visi dan Misi";
        } else {
            // 
        }

        return view("dpupr-kota-samarinda.profil.$page", [
            "title" => $title
        ]);
    }
}
