<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Calificacione
 *
 * @property $id
 * @property $alumno_id
 * @property $materia_id
 * @property $calificacion
 * @property $created_at
 * @property $updated_at
 *
 * @property Alumno $alumno
 * @property Materia $materia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Calificacione extends Model
{
    
    static $rules = [
		'alumno_id' => 'required',
		'materia_id' => 'required',
		'calificacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['alumno_id','materia_id','calificacion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function alumno()
    {
        return $this->belongsTo(\App\Models\Alumno::class, 'alumno_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function materia()
    {
        return $this->belongsTo(\App\Models\Materia::class, 'materia_id', 'id');
    }
    

}
