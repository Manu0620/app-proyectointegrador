<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cobros extends Model
{
    use HasFactory;

    protected $table = 'pago';
    protected $primaryKey = 'codpag';
}
