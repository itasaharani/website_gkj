<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SekretarisBendahara extends Model
{
    use HasFactory;
    protected $table = 'sekretaris_bendahara';
    protected $fillable = ['ketua_id', 'sekretaris', 'bendahara'];

    public function ketua()
    {
        return $this->belongsTo(Ketua::class);
    }
}
