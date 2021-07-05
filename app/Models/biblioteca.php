<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class biblioteca extends Model
{
    use HasFactory;
    protected $table= 'bibliotecas';
    protected $fillable = [
        'nomemaquina',
        'hostname',
        'maquina',
        'monitor',
        'observacoes',
        'id_escola',
        
   
   
    ];
    public function escola()
       {
          return $this->hasMany(escola::class);
      }
}
