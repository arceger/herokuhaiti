<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependentes extends Model
{
   
    protected $fillable = ['id','nome','sobrenome','email','genero','idade','tipo_dep'];

    use HasFactory;
}
