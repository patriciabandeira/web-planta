<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tb_estado';

    const CREATED_AT = 'dthr_cadastro';

    const UPDATED_AT = 'dthr_alteracao';
	
    public $timestamps = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nome', 'sigla'
    ];

    protected $visible = [
        'id', 'nome', 'sigla'
    ];

    public function plantas()
    {
        return $this->belongsToMany(Planta::class, 'tb_planta_dist_geografica');
    }
}
