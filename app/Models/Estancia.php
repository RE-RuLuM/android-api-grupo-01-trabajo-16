<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estancia extends Model
{
    use HasFactory;

    protected $primaryKey = 'CodigoEstancia';
    protected $table = 'estancias';
    public $timestamps = false;
}
