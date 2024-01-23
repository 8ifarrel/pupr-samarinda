<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;

class BeritaController extends Controller
{
  public function index()
  {
    $kategori = Kategori::firstWhere('slug', request('kategori'));
    $berita = Berita::with(['kategori'])->latest()->filter(request(['search', 'kategori']))->paginate(5)->withQueryString();

    return view('umum.berita.pilih', [
      "title" => $kategori->label,
      "berita" => $berita
    ]);
  }

  public function show(Berita $berita)
  {
    return view('umum.berita.lihat', [
      "title" => null,
      "berita" => $berita
    ]);
  }

  public function kategori()
  {
    return view('umum.berita.kategori', [
      'kategori' => Kategori::withCount('berita')->latest()->get()
    ]);
  }
}
