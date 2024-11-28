<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RenunganMingguan extends Model
{
    use HasFactory;

    protected $table = 'renungan_mingguan';
    protected $casts = [
        'tanggal' => 'datetime',
    ];
    
    protected $fillable = ['judul', 'ayat', 'konten', 'oleh', 'tanggal'];
}
