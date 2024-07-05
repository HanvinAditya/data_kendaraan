<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identitas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nopol', 'napem', 'alamat', 'pengken', 'merk', 'warna',
        'type', 'bbm', 'jenis', 'warnatnkb', 'model', 'tahunreg',
        'tahunpem', 'nomorbpkb', 'isisilinder', 'berlaku', 'norang', 'nomes'
    ];
}
