<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use DateTime;

class HomeController extends Controller
{
  public function main()
  {
    // Tanggal
    $curr = new DateTime();
    $first = $curr->format('d') - $curr->format('w');
    $senin = $first + 1;
    $selasa = $first + 2;
    $rabu = $first + 3;
    $kamis = $first + 4;
    $jumat = $first + 5;
    $sabtu = $first + 6;
    $minggu = $first + 7;
    $tanggal_minggu_ini = compact('senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu', 'minggu');

    // Berita
    $berita = Berita::with(['kategori'])->latest()->take(6)->get();

    foreach ($berita as $item) {
      $item->tanggal = $item->created_at->format('d F Y');
      $item->judul  = Str::limit(strip_tags($item->judul), 75, $end=' ...');
    }

    return view('home', [
      'berita' => $berita,
      'tanggal_minggu_ini' => $tanggal_minggu_ini
    ]);
  }
}
