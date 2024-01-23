<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\KategoriPPIDPelaksana;

class PPIDPelaksana extends Model
{
    use HasFactory;

    protected $table = 'unduhan_file';

    protected $fillable = [
        'uuid',
        'judul',
        'slug',
        'file',
        'download',
        'id_kategori',
        'id_operator'
    ];

    public function scopeUuid($query, $uuid)
    {
        return $query->whereUuid($uuid);
    }

    public function kategori()
    {
        return $this->belongsTo(KategoriPPIDPelaksana::class, 'id_kategori');
    }
}
