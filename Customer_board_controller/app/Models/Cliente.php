<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected  $fillable = ['nome', 'valor', 'modelo', 'plataforma', 'status'];

    public function equipe()
    {
       return $this->hasMany(Equipe::class, 'cliente_id');
    }




}
