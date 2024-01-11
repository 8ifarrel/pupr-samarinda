<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;

class HomeController extends Controller
{
  public function main()
  {
    // Berita
    $berita = Berita::with(['kategori'])->latest()->take(6)->get();

    foreach ($berita as $item) {
      $item->tanggal = $item->created_at->format('d F Y');
      $item->judul  = Str::limit(strip_tags($item->judul), 75, $end=' ...');
      // $item->excerpt  = Str::limit(strip_tags($item->isi), 175, $end=' ...');
    }

    return view('home', [
      'berita' => $berita
    ]);
  }
  
}
