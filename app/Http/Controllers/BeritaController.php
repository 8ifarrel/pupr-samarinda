<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
  public function index()
  {
    $kategori = Kategori::firstWhere('slug', request('kategori'));
    $title = "$kategori->label";

    return view('umum.berita.pilih', [
      "title" => $title,
      "berita" => Berita::with(['kategori'])->latest()->filter(request(['search', 'kategori']))->paginate(10)->withQueryString()
    ]);
  }

  public function show(Berita $post)
  {
    return view('post', [
      "post" => $post
    ]);
  }

  public function kategori()
  {
    return view('umum.berita.kategori', [
      'kategori' => Kategori::withCount('berita')->latest()->get()
    ]);
  }
}
