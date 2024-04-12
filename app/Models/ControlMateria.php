<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ControlMateria
 *
 * @property $id
 * @property $materia_id
 * @property $alumno_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Materia $materia
 * @property Alumno $alumno
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ControlMateria extends Model
{
    
    static $rules = [
		'materia_id' => 'required',
		'alumno_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['materia_id','alumno_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function materia()
    {
        return $this->belongsTo(\App\Models\Materia::class, 'materia_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alumno()
    {
        return $this->belongsTo(\App\Models\Alumno::class, 'alumno_id', 'id');
    }
    

}
