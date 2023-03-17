<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materia
 *
 * @property $id
 * @property $idNotas
 * @property $idPeriodo
 * @property $idCurso
 * @property $idestudiante
 * @property $nota3
 * @property $nota2
 * @property $nota1
 * @property $date
 * @property $created_at
 * @property $updated_at
 *
 * @property Nota $nota
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Materia extends Model
{
    
    static $rules = [
		'idNotas' => 'required',
		'idPeriodo' => 'required',
		'idCurso' => 'required',
		'idestudiante' => 'required',
		'nota3' => 'required',
		'nota2' => 'required',
		'nota1' => 'required',
		'date' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idNotas','idPeriodo','idCurso','idestudiante','nota3','nota2','nota1','date'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function nota()
    {
        return $this->hasOne('App\Models\Nota', 'id', 'idNotas');
    }
    

}
