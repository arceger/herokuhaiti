<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Associado extends Model
{
    protected $fillable = ['id','nome','sobrenome','endereco','email','telefone','telefone_rec','cidade','estado','description'];
   use HasFactory;
}
