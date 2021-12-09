<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViajeContratado extends Model
{
    use HasFactory;

    protected $primaryKey = 'CodigoViaje';
    protected $table = 'viajes_contratados';
    public $timestamps = false;
}
