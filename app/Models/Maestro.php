<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Maestro
 *
 * @property $id
 * @property $nombre
 * @property $Apellido_p
 * @property $Apellido_m
 * @property $codigo_empleado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Maestro extends Model
{
    
    static $rules = [
		'nombre' => 'required|string',
		'Apellido_p' => 'required|string',
		'Apellido_m' => 'required|string',
		'codigo_empleado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','Apellido_p','Apellido_m','codigo_empleado'];



}
