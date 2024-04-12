<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materia
 *
 * @property $id
 * @property $nombre
 * @property $maestro_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Maestro $maestro
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Materia extends Model
{
    
    static $rules = [
		'nombre' => 'required|string',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','maestro_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function maestro()
    {
        return $this->belongsTo(\App\Models\Maestro::class, 'maestro_id', 'id');
    }
    

}
