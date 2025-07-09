<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'programs', 'performance', 'participants',
        'pt_q1', 'pt_q2', 'pt_q3', 'pt_q4', 'pt_total',
        'fr_q1', 'fr_q2', 'fr_q3', 'fr_q4', 'fr_total',
        'fund', 'remarks'
    ];
}
