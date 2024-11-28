<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ketua extends Model
{
    use HasFactory;
    protected $table = 'ketua';

    protected $fillable = ['nama', 'jabatan'];

    public function bidang()
    {
        return $this->hasMany(Bidang::class);
    }

    public function sekretarisBendahara()
{
    return $this->hasOne(SekretarisBendahara::class);
}
}
