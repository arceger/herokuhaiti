<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escolaridade extends Model
{
    protected $fillable = ['id_usr','comments','escola_atual','grau_inst'];
    use HasFactory;
}
