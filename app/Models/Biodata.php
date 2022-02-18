<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Biodata extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nomor_telepon',
        'no_kk',
        'nik',
        'nama_lengkap',
        'alamat',
        'status',
    ];
}
