<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\AgendaKegiatan;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use DateTime;

class HomeController extends Controller
{
  public function index()
  {
    $tanggal_minggu_ini = $this->getTanggalMingguIni();

    $berita = Berita::latest()->with('kategori')->take(6)->get();

    foreach ($berita as $item) {
      $item->tanggal = $item->created_at->format('d F Y');
      $item->judul = Str::limit(strip_tags($item->judul), 75, $end = ' ...');
    }

    $agenda_kegiatan = AgendaKegiatan::latest()->get();

    foreach ($agenda_kegiatan as $item) {
      $item->dihadiri_oleh = Str::limit(strip_tags($item->dihadiri_oleh), 40, $end = ' ...');
    }

    return view('umum.home', [
      'berita' => $berita,
      'tanggal_minggu_ini' => $tanggal_minggu_ini,
      'agenda_kegiatan' => $agenda_kegiatan,
    ]);
  }
}
