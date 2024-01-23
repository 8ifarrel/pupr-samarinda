<?php

namespace App\Http\Controllers;

use App\Models\AgendaKegiatan;
use Illuminate\Http\Request;

class AgendaKegiatanController extends Controller
{
    public function index() {
        return view('umum.agenda-kegiatan', [
            'kategori' => AgendaKegiatan::latest()->get()
        ]);
    }
}
