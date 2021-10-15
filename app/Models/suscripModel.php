<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suscripModel extends Model
{
    use HasFactory;
    protected $table = 'suscriptores';
    protected $fillable = ['nombreSuscriptor', 'nombreRifa', 'fechaSuscripcion','tipoSuscripcion','precioDev','costoServidor','Saldo','Observaciones'];
        
}
