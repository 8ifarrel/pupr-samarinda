<?php

namespace App\Http\Controllers;

use App\Models\AgendaKegiatan;
use Illuminate\Http\Request;

class AgendaKegiatanController extends Controller
{
    public function index(Request $request)
    {
        // Get the selected date from the request
        $selectedDate = $request->input('selected_date', now()->format('Y-m-d'));

        // Fetch agenda items for the selected date
        $agenda_kegiatan = AgendaKegiatan::whereDate('tanggal', $selectedDate)->latest()->get();

        return view('umum.agenda-kegiatan', [
            'selectedDate' => $selectedDate,
            'agenda_kegiatan' => $agenda_kegiatan
        ]);
    }
}
