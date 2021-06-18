<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sala extends Model
{
    use HasFactory;
    protected $table= 'salas';
    protected $fillable = [
        'nome',
        'impressora',
        'maquina',
        'projetor',
        'id_escola',
   
   
    ];

       public function escola()
       {
          return $this->hasMany(escola::class);
      }
}
