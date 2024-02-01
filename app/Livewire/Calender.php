<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\AgendaKegiatan;

class Calender extends Component
{
    public $bulan;
    public $tahun;
    public $jadwal;
    public $tanggalPertamaPekan;
    public $tanggalPilihan;
    public $agenda_kegiatan;
    public $agenda_kegiatan_filter;

    public $activeDate;

    public function mount()
    {
        $this->bulan = now()->month;
        $this->tahun = now()->year;
        $this->tanggalPertamaPekan = Carbon::create($this->tahun, $this->bulan, 1)->startOfWeek();
        $this->tanggalPilihan = now()->toDateString();
        $this->agenda_kegiatan = AgendaKegiatan::all(); // Ganti ini dengan logika yang sesuai
        $this->loadJadwal();
        $this->loadAgendaKegiatan();
        $this->activeDate = now()->toDateString();
    }

    public function updatedBulan()
    {
        $this->loadJadwal();
    }

    public function updatedTahun()
    {
        $this->loadJadwal();
    }

    public function loadJadwal()
    {
        $startOfMonth = Carbon::create($this->tahun, $this->bulan, 1);
        $endOfMonth = $startOfMonth->copy()->endOfMonth();

        $this->jadwal = collect();

        while ($startOfMonth <= $endOfMonth) {
            $this->jadwal->push([
                'tanggal' => $startOfMonth->toDateString(),
                'hari' => $startOfMonth->format('l'),
                'kegiatan' => $this->getKegiatan($startOfMonth->toDateString()),
            ]);

            $startOfMonth->addDay();
        }

        // Load agenda_kegiatan untuk tampilan di luar calendar-body
        $this->loadAgendaKegiatan();
    }
    public function loadAgendaKegiatan()
    {
        if ($this->agenda_kegiatan) {
            $this->agenda_kegiatan_filter = $this->agenda_kegiatan;
        } else {
            $this->agenda_kegiatan_filter = collect();
        }
    }

    public function pilihTanggal($tanggal)
    {
        $this->tanggalPilihan = $tanggal;
        $this->loadAgendaKegiatan();
        $this->activeDate = $tanggal;
    }

    public function getKegiatan($tanggal)
    {
        $agenda = AgendaKegiatan::whereDate('tanggal', $tanggal)->first();

        return $agenda ? $agenda->nama : '';
    }

    public function loadPekanSebelumnya()
    {
        $this->tanggalPertamaPekan = $this->tanggalPertamaPekan->subMonth();
        $this->loadJadwal();
    }

    public function render()
    {
        return view('livewire.calender');
    }
}
