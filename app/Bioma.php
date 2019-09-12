<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bioma extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tb_bioma';

    const CREATED_AT = 'dthr_cadastro';

    const UPDATED_AT = 'dthr_alteracao';
	
    public $timestamps = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nome', 'cod', 'descricao'
    ];

    protected $visible = [
        'id', 'nome', 'cod', 'descricao'
    ];

    public function plantas()
    {
        return $this->belongsToMany(Planta::class, 'tb_planta_bioma');
    }

}
