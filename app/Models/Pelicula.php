<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pelicula
 *
 * @property $idPeliculas
 * @property $Nombre
 * @property $Descripcion
 * @property $Genero
 * @property $Pais
 * @property $Distribuidor
 * @property $FechaSubida
 * @property $Duracion
 * @property $Clasificacion
 * @property $Poster
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pelicula extends Model
{
    
    static $rules = [
		'idPeliculas' => 'required',
		'Nombre' => 'required',
		'Descripcion' => 'required',
		'Genero' => 'required',
		'Pais' => 'required',
		'Distribuidor' => 'required',
		'FechaSubida' => 'required',
		'Duracion' => 'required',
		'Clasificacion' => 'required',
		'Poster' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idPeliculas','Nombre','Descripcion','Genero','Pais','Distribuidor','FechaSubida','Duracion','Clasificacion','Poster'];



}
