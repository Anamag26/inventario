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
        'descricao'
   
   
    ];
    public function escola()
       {
          return $this->hasMany(escola::class);
      }
}
