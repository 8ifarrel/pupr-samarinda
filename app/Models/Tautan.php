<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tautan extends Model
{
    use HasFactory;

    protected $table = 'tautan';

	protected $fillable = [
		'uuid', 
		'banner', 
		'label', 
		'url', 
		'new_tab', 
		'id_operator'
	];

	public function scopeUuid($query, $uuid) {
		return $query->whereUuid($uuid);
	}
}
