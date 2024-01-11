<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use HasFactory;

    protected $table = 'berita';

    protected $fillable = [
		'uuid', 
		'foto', 
		'sumber_foto', 
		'judul', 
		'slug', 
		'preview', 
		'isi', 
		'sumber', 
		'komentar', 
		'headline', 
		'view', 
		'status', 
		'id_operator', 
		'id_kategori', 
		'created_at'
	];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}