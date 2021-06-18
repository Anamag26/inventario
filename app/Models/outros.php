<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class outros extends Model
{
    use HasFactory;
    protected $table= 'outros';
    protected $fillable = [
        'nomeoutros',
        'descricao'
   
   
    ];
    public function escola()
    {
        return $this->hasMany(escola::class);
    }
}
