<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pendeta extends Model
{
    protected $table = 'pendeta';
    use HasFactory;

    protected $fillable = ['name', 'photo'];
}
