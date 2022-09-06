<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['nome', 'funcao', 'equipe_id'];


    public function equipes()
    {
        $this->belongsToMany(Equipe::class);
    }
}
