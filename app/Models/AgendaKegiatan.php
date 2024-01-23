<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgendaKegiatan extends Model
{
    use HasFactory;

    protected $table = 'agenda_kegiatan';

    protected $fillable = [
        'uuid',
        'nama',
        'waktu',
        'tempat',
        'dihadiri_oleh',
        'tanggal'
    ];

    public function scopeUuid($query, $uuid)
    {
        return $query->whereUuid($uuid);
    }
}
