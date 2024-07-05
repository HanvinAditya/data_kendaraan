<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'dakep',
        'exp_stnk',
        'jatuh_tempo_stnk',
        'exp_tnkb',
        'exp_kir',
        'jatuh_tempo_kir',
        'bpkb',
        'dup_key',
        'exp_asr',
        'jatuh_tempo_asuransi',
        'or_q1',
        'or_q2',
        'or_q3',
        'or_q4'
    ];
}
