<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    use HasFactory;
    protected $table = 'Bidang';

    protected $fillable = ['ketua_id', 'nama_bidang'];

    public function komisi()
    {
        return $this->hasMany(Komisi::class);
    }
}
