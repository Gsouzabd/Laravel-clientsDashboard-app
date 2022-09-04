<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected  $fillable = ['nome', 'cliente_id'];

    public function funcionarios()
    {
       return $this->hasMany(Funcionario::class, 'equipe_id');
    }

}
