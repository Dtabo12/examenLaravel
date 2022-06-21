<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Paciente
 *
 * @property $id
 * @property $documento
 * @property $tipoDocumento
 * @property $nombre
 * @property $apellidos
 * @property $direccion
 * @property $telefono
 * @property $genero
 * @property $fechaNacimiento
 * @property $estadoCivil
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paciente extends Model
{
    
    static $rules = [
		'documento' => 'required',
		'tipoDocumento' => 'required',
		'nombre' => 'required',
		'apellidos' => 'required',
		'direccion' => 'required',
		'telefono' => 'required',
		'genero' => 'required',
		'fechaNacimiento' => 'required',
		'estadoCivil' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['documento','tipoDocumento','nombre','apellidos','direccion','telefono','genero','fechaNacimiento','estadoCivil'];



}
