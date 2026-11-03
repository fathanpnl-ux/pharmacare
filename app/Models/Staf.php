<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staf extends Model
{
    protected $fillable = [
        'nama',
        'alamat',
        'tanggal_lahir',
        'tempat_lahir',
        'no_hp',
    ];
}