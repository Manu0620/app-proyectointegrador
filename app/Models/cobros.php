<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cobros extends Model
{
    use HasFactory;

    protected $table = 'pago';
    protected $primaryKey = 'codpag';

    public $fillable = [
        'codcue',
        'form_pago',
        'cuenta_empresa',
        'cuenta_cliente',
        'banco',
        'fecemi',
        'montpag',
        'cobrado',
        'devuelta',
        'comentario'
    ];
}
