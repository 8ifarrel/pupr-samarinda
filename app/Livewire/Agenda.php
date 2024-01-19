<?php

namespace App\Livewire;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\AgendaKegiatan;


class Agenda extends Component
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
        $this->tanggalPertamaPekan = now()->startOfWeek();
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
        $startOfWeek = $this->tanggalPertamaPekan->copy();
        $endOfWeek = $this->tanggalPertamaPekan->copy()->endOfWeek();

        $this->jadwal = collect();

        while ($startOfWeek <= $endOfWeek) {
            $this->jadwal->push([
                'tanggal' => $startOfWeek->toDateString(),
                'hari' => $startOfWeek->format('l'),
                'kegiatan' => $this->getKegiatan($startOfWeek->toDateString()),
            ]);

            $startOfWeek->addDay();
        }
        // Load agenda_kegiatan untuk tampilan di luar calendar-body
        $this->loadAgendaKegiatan();
    }

    public function loadAgendaKegiatan()
    {   
        if ($this->agenda_kegiatan) {
            $this->agenda_kegiatan_filter = $this->agenda_kegiatan->filter(function ($item) {
                $tanggalKegiatan = Carbon::parse($item->tanggal);
                return $tanggalKegiatan->isSameDay($this->tanggalPilihan);
            })->take(3);
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
        $this->tanggalPertamaPekan = $this->tanggalPertamaPekan->subWeek();
        $this->loadJadwal();
    }

    public function loadPekanBerikutnya()
    {
        $this->tanggalPertamaPekan = $this->tanggalPertamaPekan->addWeek();
        $this->loadJadwal();
    }

    public function render()
    {
        return view('livewire.agenda');
    }
}
