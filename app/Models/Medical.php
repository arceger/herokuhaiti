<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    protected $fillable = ['id','vacinas_st','vacinas_brief','alergias','email'];
    
    use HasFactory;
}
