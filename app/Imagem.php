<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tb_imagem';

    const CREATED_AT = 'dthr_cadastro';

    const UPDATED_AT = 'dthr_alteracao';
	
    public $timestamps = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'url', 'autor', 'fonte', 'planta_id'
    ];

    protected $visible = [
        'id', 'url', 'autor', 'fonte'
    ];

    public function planta()
    {
        return $this->belongsTo(Planta::class);
    }

}
