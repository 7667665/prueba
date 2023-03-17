<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Nota
 *
 * @property $id
 * @property $name
 * @property $creditos
 * @property $estado
 * @property $date
 * @property $created_at
 * @property $updated_at
 *
 * @property Materia[] $materias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Nota extends Model
{
    
    static $rules = [
		'name' => 'required',
		'creditos' => 'required',
		'estado' => 'required',
		'date' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','creditos','estado','date'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function materias()
    {
        return $this->hasMany('App\Models\Materia', 'idNotas', 'id');
    }
    

}
