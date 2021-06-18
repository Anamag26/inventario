<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class escola extends Model
{
    protected $table= 'escolas';
    protected $fillable = [
        'nome',
        'localizacao',
        
    ];

       public function sala()
      {
        return $this->belongsTo(sala::class);
     }
     public function biblioteca()
     {
       return $this->belongsTo(biblioteca::class);
    }
    public function outros()
    {
      return $this->belongsTo(outros::class);
   }
}
