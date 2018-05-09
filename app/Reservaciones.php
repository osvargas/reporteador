<?php

namespace Reporteador;

use Illuminate\Database\Eloquent\Model;

class Reservaciones extends Model
{
    protected $table='reservaciones';
    protected $primaryKey="idReserva";

    public $timestamps=false;

    protected $fillable = [
    	'servicio',
    	'pax'
    ];

    protected $guarded = [

    ];
}
