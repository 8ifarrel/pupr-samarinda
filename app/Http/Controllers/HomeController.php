<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\AgendaKegiatan;
use App\Models\Tautan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
  public $selectedDate;

  public function index()
  {
    // Agenda kegiatan
    $agenda_kegiatan = AgendaKegiatan::latest()->get();

    // Berita
    $berita = Berita::with(['kategori'])->latest()->take(6)->get();

    foreach ($berita as $item) {
      $item->tanggal = $item->created_at->format('d F Y');
      $item->judul = Str::limit(strip_tags($item->judul), 75, $end = ' ...');
    }

    // Agenda Kegiatan
    foreach ($agenda_kegiatan as $item) {
      $item->dihadiri_oleh = Str::limit(strip_tags($item->dihadiri_oleh), 50, $end = ' ...');
    }

    // Tautan
    $tautan = Tautan::latest()->get();

    // Return
    return view('umum.home', [
      'berita' => $berita,
      'agenda_kegiatan' => $agenda_kegiatan,
      'tautan' => $tautan
    ]);
  }

  public function show(Berita $berita)
  {
    return view('umum.berita.lihat', [
      "title" => null,
      "berita" => $berita
    ]);
  }
}
