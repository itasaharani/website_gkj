<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StrukturOrganisasi extends Model
{
    
    /**
     * Kolom yang dapat diisi secara massal (mass assignment).
     */

    use HasFactory;
    protected $table = 'struktur_organisasi';
     
    protected $fillable = [
        'posisi',      // Posisi jabatan (misal Ketua I, Sekretaris)
        'nama',        // Nama orang di posisi tersebut
        'bidang',      // Nama bidang, jika ada
        'parent_id',   // ID struktur di atasnya (jika ada hubungan hierarki)
    ];

    /**
     * Relasi ke struktur di atas (parent).
     */
    public function parent()
    {
        return $this->belongsTo(StrukturOrganisasi::class, 'parent_id');
    }

    // Relasi untuk mendapatkan anak (child)
    public function children()
    {
        return $this->hasMany(StrukturOrganisasi::class, 'parent_id');
    }
}
