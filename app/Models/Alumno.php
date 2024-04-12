<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Alumno
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 * @property $Apellido_p
 * @property $Apellido_m
 * @property $codigo_alumno
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Alumno extends Model
{
    
    static $rules = [
		'nombre' => 'required|string',
		'Apellido_p' => 'required|string',
		'Apellido_m' => 'required|string',
		'codigo_alumno' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','Apellido_p','Apellido_m','codigo_alumno'];



}
