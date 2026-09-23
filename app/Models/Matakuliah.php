<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;

    protected $fillable = ['dosen_id', 'kode_mk', 'nama_mk', 'sks', 'semester'];

    public function dosen()
    {
        return $this->belongsTo(User::class, 'dosen_id');
    }
}