<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Associados extends Model
{
    protected $fillable = ['id','nome','sobrenome','endereco','telefone','telefone_rec','cidade','estado','description','papel'];
   /use HasFactory;
}
