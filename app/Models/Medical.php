<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    protected $fillable = ['id_usr','vacinas_st','vacinas_brief','tipo_sang','alergias','email'];
    
    use HasFactory;
}
