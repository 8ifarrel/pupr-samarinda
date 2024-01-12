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
      $item->judul = Str::limit(strip_tags($item->judul), 75, $end = ' ...');
    }

    // Agenda kegiatan
    $agenda_kegiatan = AgendaKegiatan::latest()->get();

    foreach ($agenda_kegiatan as $item) {
      $item->dihadiri_oleh = Str::limit(strip_tags($item->dihadiri_oleh), 40, $end = ' ...');
  
      $start_time = strtotime($item->waktu_mulai);
      $end_time = strtotime($item->waktu_selesai);
      $agenda_date = strtotime($item->tanggal); // Assuming 'tanggal' is the date column in your database
      $current_time = strtotime(now());
  
      // Check if the agenda date has passed
      if ($current_time > $agenda_date) {
          $item->status = 'Selesai';
      }
      // Check if the agenda will start within the next hour
      elseif (($start_time - $current_time) <= 3600 && $current_time < $start_time) {
          $item->status = 'Akan Berlangsung';
      }
      // Check if the agenda is currently ongoing
      elseif ($current_time >= $start_time && $current_time <= $end_time) {
          $item->status = 'Sedang Berlangsung';
      }
      // Default status
      else {
          $item->status = 'Belum Dimulai';
      }
  }  

    // Return
    return view('home', [
      'berita' => $berita,
      'tanggal_minggu_ini' => $tanggal_minggu_ini,
      'agenda_kegiatan' => $agenda_kegiatan,
    ]);
  }
}
